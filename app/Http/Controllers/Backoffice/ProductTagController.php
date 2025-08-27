<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductTagRequest;
use App\Models\ProductTag;
use Illuminate\Support\Str;

class ProductTagController extends Controller
{
    public function index()
    {
        $tags = ProductTag::latest()->paginate(10);
        return view('backoffice.product_tags.index', compact('tags'));
    }

    public function create()
    {
        return view('backoffice.product_tags.create');
    }

    public function store(ProductTagRequest $request)
    {
        $data = $request->validated();

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        ProductTag::create($data);

        return redirect()
            ->route('backoffice.product-tags.index')
            ->with('success', 'Tag créé avec succès.');
    }

    public function edit(ProductTag $product_tag)
    {
        return view('backoffice.product_tags.edit', compact('product_tag'));
    }

    public function update(ProductTagRequest $request, ProductTag $product_tag)
    {
        $data = $request->validated();

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        $product_tag->update($data);

        return redirect()
            ->route('backoffice.product-tags.index')
            ->with('success', 'Tag mis à jour avec succès.');
    }

    public function destroy(ProductTag $product_tag)
    {
        $product_tag->delete();

        return redirect()
            ->route('backoffice.product-tags.index')
            ->with('success', 'Tag supprimé avec succès.');
    }
}
