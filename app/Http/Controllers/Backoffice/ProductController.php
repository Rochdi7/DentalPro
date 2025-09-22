<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductTag;
use App\Models\ProductCharacteristic;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(20);
        return view('backoffice.products.index', compact('products'));
    }

    public function create()
    {
        $parents = ProductCategory::whereNull('parent_id')->get();

        $children = ProductCategory::whereNotNull('parent_id')->get();

        $tags = ProductTag::orderBy('name')->get();

        return view('backoffice.products.create', compact('parents', 'children', 'tags'));
    }

    public function store(ProductRequest $request)
    {
        DB::beginTransaction();

        try {
            $data = $request->validated();
            Log::debug('Store Product - Validated Data:', $data);

            $baseData = collect($data)->only([
                'title',
                'slug',
                'description',
                'price',
                'old_price',
                'sku',
                'product_category_id',
                'is_published',
                'meta_title',
                'meta_description',
                'published_at',
            ])->toArray();

            $baseData['is_hot'] = $request->has('is_hot');
            $baseData['is_occasion'] = $request->has('is_occasion');

            if (empty($baseData['slug']) && !empty($baseData['title'])) {
                $baseData['slug'] = Str::slug($baseData['title']);
            }

            $product = Product::create($baseData);
            Log::debug('Store Product - Created Product ID:', [$product->id]);

            $product->tags()->sync($request->input('tags', []));

            if ($request->hasFile('main_image')) {
                $product->addMediaFromRequest('main_image')->toMediaCollection('main_image');
            }

            if ($request->hasFile('gallery')) {
                foreach ($request->file('gallery') as $image) {
                    $product->addMedia($image)->toMediaCollection('gallery');
                }
            }

            $this->syncCharacteristics($product, $request->input('characteristics', []));
            DB::commit();

            return redirect()->route('backoffice.products.index')->with('success', 'Produit créé avec succès.');
        } catch (\Throwable $e) {
            DB::rollBack();

            Log::error('Product Store Error:', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);

            return back()->withInput()->withErrors('Erreur lors de la création du produit: ' . $e->getMessage());
        }
    }

    public function edit(Product $product)
    {
        // Load parent categories with their children to provide a hierarchical dropdown
        $categories = ProductCategory::with('children')->whereNull('parent_id')->get();
        $tags = ProductTag::orderBy('name')->get();

        $product->load(['tags', 'media', 'characteristics']);

        return view('backoffice.products.edit', compact('product', 'categories', 'tags'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        DB::beginTransaction();

        try {
            $data = $request->validated();

            $baseData = collect($data)->only([
                'title',
                'slug',
                'description',
                'price',
                'old_price',
                'sku',
                'product_category_id',
                'is_published',
                'meta_title',
                'meta_description',
                'published_at',
            ])->toArray();

            $baseData['is_hot'] = $request->has('is_hot');
            $baseData['is_occasion'] = $request->has('is_occasion');

            if (empty($baseData['slug']) && !empty($baseData['title'])) {
                $baseData['slug'] = Str::slug($baseData['title']);
            }

            $product->update($baseData);

            $product->tags()->sync($request->input('tags', []));

            if ($request->hasFile('main_image')) {
                $product->clearMediaCollection('main_image');
                $product->addMediaFromRequest('main_image')->toMediaCollection('main_image');
            }

            if ($request->hasFile('gallery')) {
                foreach ($request->file('gallery') as $image) {
                    $product->addMedia($image)->toMediaCollection('gallery');
                }
            }

            $this->syncCharacteristics($product, $request->input('characteristics', []));

            DB::commit();
            return redirect()->route('backoffice.products.index')->with('success', 'Produit mis à jour avec succès.');
        } catch (\Throwable $e) {
            DB::rollBack();
            return back()->withInput()->withErrors('Erreur lors de la mise à jour: ' . $e->getMessage());
        }
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('backoffice.products.index')->with('success', 'Produit supprimé.');
    }

    protected function syncCharacteristics(Product $product, array $characteristics): void
    {
        $toDelete = request()->input('_deleted_characteristic_ids', []);

        if (empty($characteristics)) {
            $product->characteristics()->delete();
            return;
        }

        if (!empty($toDelete)) {
            ProductCharacteristic::where('product_id', $product->id)
                ->whereIn('id', $toDelete)
                ->delete();
        }

        $seenIds = [];

        foreach ($characteristics as $char) {
            $name = trim($char['attribute_name'] ?? '');
            $value = trim($char['value'] ?? '');

            if ($name === '' || $value === '') {
                continue;
            }

            $data = [
                'attribute_name' => $name,
                'value' => $value,
                'position' => isset($char['position']) && is_numeric($char['position']) ? (int)$char['position'] : 0,
            ];

            if (!empty($char['id'])) {
                $item = ProductCharacteristic::where('product_id', $product->id)
                    ->where('id', $char['id'])
                    ->first();

                if ($item) {
                    $item->update($data);
                    $seenIds[] = $item->id;
                }
            } else {
                $item = $product->characteristics()->create($data);
                $seenIds[] = $item->id;
            }
        }

        ProductCharacteristic::where('product_id', $product->id)
            ->whereNotIn('id', $seenIds)
            ->delete();
    }
}
