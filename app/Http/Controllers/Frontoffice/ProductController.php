<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ProductController extends Controller
{
    /**
     * Display a listing of products with optional filters.
     */
    public function index(Request $request)
    {
        $query = Product::with(['media', 'category', 'tags', 'characteristics'])
            ->where('is_published', true); // ✅ fixed column name

        // ✅ Filter by category (slug or ID)
        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category)
                    ->orWhere('id', $request->category);
            });
        }

        // ✅ Filter by tag (slug or ID)
        if ($request->filled('tag')) {
            $query->whereHas('tags', function ($q) use ($request) {
                $q->where('slug', $request->tag)
                    ->orWhere('id', $request->tag);
            });
        }

        // ✅ Filter by price range
        if ($request->filled('prix_min')) {
            $query->where('price', '>=', (float) $request->prix_min);
        }
        if ($request->filled('prix_max')) {
            $query->where('price', '<=', (float) $request->prix_max);
        }

        // ✅ Filter by flags (occasion / hot)
        if ($request->boolean('occasion')) {
            $query->where('is_occasion', true);
        }
        if ($request->boolean('hot')) {
            $query->where('is_hot', true);
        }

        // ✅ Sort (default: newest)
        if ($request->filled('sort')) {
            switch ($request->sort) {
                case 'price_asc':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('price', 'desc');
                    break;
                case 'oldest':
                    $query->orderBy('created_at', 'asc');
                    break;
                default:
                    $query->orderBy('created_at', 'desc');
            }
        } else {
            $query->orderBy('created_at', 'desc');
        }

        // ✅ Paginate results
        $products = $query->paginate(12)->withQueryString();

        // ✅ Load filter options (categories + tags)
        // Check if product_categories table has `is_active`, otherwise just fetch all
        if (Schema::hasColumn('product_categories', 'is_active')) {
            $categories = ProductCategory::where('is_active', true)->get();
        } else {
            $categories = ProductCategory::all();
        }

        $tags = ProductTag::all();

        return view('frontoffice.products.index', compact('products', 'categories', 'tags'));
    }

    /**
     * Display a single product detail page.
     */
    public function show($slug)
    {
        // Load the selected product with its relations
        $product = Product::where('slug', $slug)
            ->with(['media', 'characteristics', 'tags', 'category'])
            ->firstOrFail();

        // Load related products (same category, exclude current) with necessary relations
        $relatedProducts = Product::with(['media', 'characteristics'])
            ->where('product_category_id', $product->product_category_id)
            ->where('id', '!=', $product->id)
            ->inRandomOrder()
            ->take(8)
            ->get();

        // Return to the product detail page
        return view('frontoffice.products.show', compact('product', 'relatedProducts'));
    }
}
