<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
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
