<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Requests\BlogCategoryRequest;
use App\Models\BlogCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogCategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = BlogCategory::query()
            ->when(
                $request->q,
                fn($q, $search) =>
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('slug', 'like', "%{$search}%")
            )
            ->orderBy('position')
            ->paginate(15);

        return view('backoffice.blog_categories.index', compact('categories'));
    }

    public function create()
    {
        return view('backoffice.blog_categories.create');
    }

    public function store(BlogCategoryRequest $request)
    {
        $data = $request->validated();

        // Auto-generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        BlogCategory::create($data);

        return redirect()
            ->route('backoffice.blog_categories.index')
            ->with('success', 'Catégorie ajoutée avec succès.');
    }

    public function edit(BlogCategory $blog_category)
    {
        $categories = BlogCategory::where('id', '!=', $blog_category->id)
            ->orderBy('position')
            ->get();

        return view('backoffice.blog_categories.edit', [
            'category'   => $blog_category,
            'categories' => $categories,
        ]);
    }

    public function update(BlogCategoryRequest $request, BlogCategory $blog_category)
    {
        $data = $request->validated();

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        $blog_category->update($data);

        return redirect()
            ->route('backoffice.blog_categories.index')
            ->with('success', 'Catégorie mise à jour avec succès.');
    }

    public function destroy(BlogCategory $blog_category)
    {
        $blog_category->delete();

        return redirect()
            ->route('backoffice.blog_categories.index')
            ->with('success', 'Catégorie supprimée avec succès.');
    }
}
