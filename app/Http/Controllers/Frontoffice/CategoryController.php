<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class CategoryController extends Controller
{
    public function index(Request $request, $slug)
    {
        $category = ProductCategory::where('slug', $slug)->firstOrFail();

        $products = Product::with('media')
            ->where('product_category_id', $category->id)
            ->paginate(12);

        $categories = ProductCategory::with('children')->whereNull('parent_id')->get();

        return view('frontoffice.category.index', compact('category', 'products', 'categories'));
    }
}
