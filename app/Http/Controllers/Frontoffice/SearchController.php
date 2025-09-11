<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');

        $products = Product::with('media')
            ->when($query, function ($q) use ($query) {
                $q->where('title', 'like', "%{$query}%")
                  ->orWhere('description', 'like', "%{$query}%");
            })
            ->paginate(12);

        // ✅ Charger catégories avec sous-catégories
        $categories = ProductCategory::with('children')->whereNull('parent_id')->get();

        return view('frontoffice.search.index', compact('products', 'query', 'categories'));
    }
}
