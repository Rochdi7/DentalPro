<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCategoryRequest;
use App\Models\ProductCategory;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        $categories = ProductCategory::with('parent')
            ->latest()
            ->paginate(10);

        return view('backoffice.product_categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        $categories = ProductCategory::whereNull('parent_id')->orderBy('name')->get();

        return view('backoffice.product_categories.create', compact('categories'));
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(ProductCategoryRequest $request)
    {
        // Create the main category
        $category = ProductCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'position' => $request->position ?? 0,
            'is_active' => true,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'parent_id' => null,
        ]);

        // Add new subcategories if provided
        if ($request->has('subcategories')) {
            foreach ($request->subcategories as $subName) {
                if (trim($subName)) {
                    ProductCategory::create([
                        'name' => $subName,
                        'slug' => Str::slug($subName),
                        'parent_id' => $category->id,
                        'position' => 0,
                        'is_active' => true,
                    ]);
                }
            }
        }

        return redirect()
            ->route('backoffice.product-categories.index')
            ->with('success', 'Catégorie enregistrée avec sous-catégories si spécifiées.');
    }

    /**
     * Display the specified category.
     */
    public function show(ProductCategory $product_category)
    {
        return view('backoffice.product_categories.show', [
            'category' => $product_category,
        ]);
    }

    /**
     * Show the form for editing the specified category.
     */
    public function edit(ProductCategory $product_category)
    {
        $product_category->load('children');

        $categories = ProductCategory::whereNull('parent_id')
            ->where('id', '!=', $product_category->id)
            ->orderBy('name')
            ->get();

        return view('backoffice.product_categories.edit', [
            'category' => $product_category,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified category in storage.
     */
    public function update(ProductCategoryRequest $request, ProductCategory $product_category)
    {
        // Update the main category
        $product_category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'parent_id' => $request->parent_id,
            'position' => $request->position ?? 0,
            'is_active' => true,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        // Add new subcategories if provided
        if ($request->has('subcategories')) {
            foreach ($request->subcategories as $subName) {
                if (trim($subName)) {
                    ProductCategory::create([
                        'name' => $subName,
                        'slug' => Str::slug($subName),
                        'parent_id' => $product_category->id,
                        'position' => 0,
                        'is_active' => true,
                    ]);
                }
            }
        }

        return redirect()
            ->route('backoffice.product-categories.index')
            ->with('success', 'Catégorie mise à jour avec succès.');
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy(ProductCategory $product_category)
    {
        $product_category->delete();

        return redirect()
            ->route('backoffice.product-categories.index')
            ->with('success', 'Catégorie supprimée avec succès.');
    }
}
