<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\CartItem;
use App\Models\Wishlist;
use App\Models\BlogPost;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $sessionId = $request->session()->getId();

        // Derniers produits
        $products = Product::latest()
            ->with(['media', 'characteristics'])
            ->take(12)
            ->get();

        // Meilleures offres
        $bestDeals = Product::whereNotNull('old_price')
            ->whereColumn('old_price', '>', 'price')
            ->with(['media', 'characteristics'])
            ->inRandomOrder()
            ->take(10)
            ->get();

        // Categories parents avec produits de leurs sous-catégories
        $categories = ProductCategory::whereNull('parent_id')
            ->where('is_active', true)
            ->with(['children.products' => function ($query) {
                $query->where('is_published', true)
                    ->with(['media', 'characteristics']);
            }])
            ->get();

        // Merge products from subcategories into parent categories
        foreach ($categories as $category) {
            $allProducts = collect();
            foreach ($category->children as $child) {
                $allProducts = $allProducts->merge($child->products);
            }
            // Optional: limit to 5 products per parent category
            $category->products = $allProducts->take(5);
        }

        // Produits en vedette
        $featuredProducts = Product::where('is_published', true)
            ->where('is_hot', true)
            ->with(['media', 'characteristics'])
            ->inRandomOrder()
            ->take(6)
            ->get();

        // Produits pour la section "Nos collections"
        $collectionProducts = Product::where('is_published', true)
            ->with(['media', 'characteristics'])
            ->inRandomOrder()
            ->take(8)
            ->get();

        // Panier et wishlist
        $cartItems = CartItem::with('product.media')->where('session_id', $sessionId)->get();
        $wishlistItems = Wishlist::with('product.media')->where('session_id', $sessionId)->get();

        // Latest blog posts
        $latestPosts = BlogPost::with('tags')
            ->where('is_published', true)
            ->orderByDesc('published_at')
            ->take(6)
            ->get();

        return view('index', compact(
            'products',
            'bestDeals',
            'categories',
            'featuredProducts',
            'collectionProducts',
            'cartItems',
            'wishlistItems',
            'latestPosts'
        ));
    }


    public function quickview($id)
    {
        $product = Product::with(['media', 'characteristics', 'tags'])->findOrFail($id);

        return response()->json([
            'id' => $product->id,
            'title' => $product->title,
            'price' => number_format($product->price, 2),
            'old_price' => $product->old_price ? number_format($product->old_price, 2) : null,
            'sku' => $product->sku,
            'tags' => $product->tags->pluck('name'),
            'characteristics' => $product->characteristics->map(fn($c) => [
                'name' => $c->attribute_name,
                'value' => $c->value
            ]),
            'main_image' => $product->getFirstMediaUrl('main_image') ?: asset('img/default-product.jpg'),
            'gallery' => $product->getMedia('gallery')->take(5)->map(fn($m) => $m->getUrl()),
            'is_hot' => $product->is_hot,
            'is_occasion' => $product->is_occasion,
        ]);
    }

    public function ajaxSearch(Request $request)
    {
        $q = $request->get('q');

        $products = Product::where('title', 'LIKE', "%{$q}%")
            ->orWhere('description', 'LIKE', "%{$q}%")
            ->take(5)
            ->get()
            ->map(function ($product) {
                return [
                    'id' => $product->id,
                    'slug' => $product->slug,
                    'title' => $product->title,
                    'price' => $product->price,
                    'main_image_url' => $product->getFirstMediaUrl('main_image')
                        ?: asset('assets/img/products/default.jpg'),
                ];
            });

        return response()->json($products);
    }
}
