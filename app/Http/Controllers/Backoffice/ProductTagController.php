<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductTagRequest;
use App\Models\ProductTag;
use Illuminate\Support\Str;
use Illuminate\Http\Request; 

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

    public function store(Request $request)
{
    $request->validate([
        'tags' => 'required|string',
    ]);

    $inputTags = explode(',', $request->input('tags'));
    $created = [];

    foreach ($inputTags as $tagName) {
        $name = trim($tagName);

        if ($name !== '') {
            $slug = Str::slug($name);

            // Évite les doublons avec firstOrCreate
            $tag = ProductTag::firstOrCreate(
                ['slug' => $slug],
                ['name' => $name]
            );

            $created[] = $tag->name;
        }
    }

    return redirect()
        ->route('backoffice.product-tags.index')
        ->with('success', 'Tags créés : ' . implode(', ', $created));
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
