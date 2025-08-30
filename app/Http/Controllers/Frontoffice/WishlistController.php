<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\View;

class WishlistController extends Controller
{
    /**
     * Display wishlist page
     */
    public function index()
    {
        $wishlist = session()->get('wishlist', []);
        $products = Product::whereIn('id', $wishlist)->get();

        return view('frontoffice.wishlist.index', compact('products'));
    }


    /**
     * Toggle product in wishlist (AJAX)
     */
    public function addToWishlist(Request $request)
    {
        $productId = (int) $request->product_id;
        $wishlist = session()->get('wishlist', []);

        if (in_array($productId, $wishlist)) {
            $wishlist = array_diff($wishlist, [$productId]);
            session()->put('wishlist', $wishlist);
            return response()->json([
                'message' => 'Retiré de la wishlist',
                'count'   => count($wishlist),
                'added'   => false
            ]);
        } else {
            $wishlist[] = $productId;
            session()->put('wishlist', $wishlist);
            return response()->json([
                'message' => 'Ajouté à la wishlist',
                'count'   => count($wishlist),
                'added'   => true
            ]);
        }
    }

    public function getWishlistData()
    {
        $wishlist = session('wishlist', []);
        $products = Product::whereIn('id', $wishlist)->with('media')->get();

        $html = view('frontoffice.wishlist.partials._products', compact('products'))->render();

        return response()->json([
            'html' => $html,
            'count' => count($products),
        ]);
    }
    public function toggle(Request $request)
{
    $productId = $request->input('product_id');
    $wishlist = session()->get('wishlist', []);

    if (in_array($productId, $wishlist)) {
        // Remove
        $wishlist = array_filter($wishlist, fn($id) => $id != $productId);
        session()->put('wishlist', $wishlist);
        return response()->json([
            'added' => false,
            'count' => count($wishlist),
        ]);
    } else {
        // Add
        $wishlist[] = $productId;
        session()->put('wishlist', array_unique($wishlist));
        return response()->json([
            'added' => true,
            'count' => count($wishlist),
        ]);
    }
}

}
