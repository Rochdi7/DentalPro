<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use App\Models\ProductTag;
use App\Models\Product;

class ProductTagController extends Controller
{


public function show($slug)
{
    $tag = ProductTag::where('slug', $slug)->firstOrFail();

    $products = Product::whereHas('tags', function ($q) use ($slug) {
        $q->where('slug', $slug);
    })->with('media')->paginate(12);

    return view('frontoffice.products.by-tag', compact('tag', 'products'));
}

}
