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
use Illuminate\Support\Facades\Log; // 👈 add this at the top
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(20);
        return view('backoffice.products.index', compact('products'));
    }

    public function create()
    {
        $parents  = ProductCategory::whereNull('parent_id')->orderBy('name')->get();
        $children = ProductCategory::whereNotNull('parent_id')->orderBy('name')->get();
        $tags     = ProductTag::orderBy('name')->get();

        return view('backoffice.products.create', compact('parents', 'children', 'tags'));
    }



    public function store(ProductRequest $request)
    {
        DB::beginTransaction();

        try {
            $data = $request->validated();
            Log::debug('Store Product - Validated Data:', $data); // ✅ Debug input

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

            Log::debug('Store Product - Base Data:', $baseData); // ✅ Debug DB insert data

            if (empty($baseData['slug']) && !empty($baseData['title'])) {
                $baseData['slug'] = Str::slug($baseData['title']);
            }

            $product = Product::create($baseData);
            Log::debug('Store Product - Created Product ID:', [$product->id]);

            $tags = $request->input('tags', []);
            Log::debug('Store Product - Tags:', $tags);

            $product->tags()->sync($tags); // 👈 likely where the error hits

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

            // ✅ Full SQL and trace logging
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
        $parents  = ProductCategory::whereNull('parent_id')->orderBy('name')->get();
        $children = ProductCategory::whereNotNull('parent_id')->orderBy('name')->get();
        $tags     = ProductTag::orderBy('name')->get();

        $product->load(['tags', 'media', 'characteristics']);

        return view('backoffice.products.edit', compact('product', 'parents', 'children', 'tags'));
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

        // If no characteristics at all, wipe them
        if (empty($characteristics)) {
            $product->characteristics()->delete();
            return;
        }

        // Delete requested ones
        if (!empty($toDelete)) {
            ProductCharacteristic::where('product_id', $product->id)
                ->whereIn('id', $toDelete)
                ->delete();
        }

        $seenIds = [];

        foreach ($characteristics as $char) {
            $name  = trim($char['attribute_name'] ?? '');
            $value = trim($char['value'] ?? '');

            // ✅ Skip invalid entries
            if ($name === '' || $value === '') {
                continue;
            }

            $data = [
                'attribute_name' => $name,
                'value'          => $value,
                'position'       => isset($char['position']) && is_numeric($char['position']) ? (int)$char['position'] : 0,
            ];

            // Update if ID exists
            if (!empty($char['id'])) {
                $item = ProductCharacteristic::where('product_id', $product->id)
                    ->where('id', $char['id'])
                    ->first();

                if ($item) {
                    $item->update($data);
                    $seenIds[] = $item->id;
                }
            } else {
                // Otherwise create new
                $item = $product->characteristics()->create($data);
                $seenIds[] = $item->id;
            }
        }

        // Cleanup: remove old ones not seen in this sync
        ProductCharacteristic::where('product_id', $product->id)
            ->whereNotIn('id', $seenIds)
            ->delete();
    }
}
