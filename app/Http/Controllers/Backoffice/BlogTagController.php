<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogTagRequest;
use App\Models\BlogTag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogTagController extends Controller
{
    public function index(Request $request)
    {
        $tags = BlogTag::query()
            ->when($request->q, fn($query, $q) =>
                $query->where('name', 'like', "%{$q}%")
                      ->orWhere('slug', 'like', "%{$q}%")
            )
            ->latest()
            ->paginate(15);

        return view('backoffice.blog_tags.index', compact('tags'));
    }

    public function create()
    {
        return view('backoffice.blog_tags.create');
    }

    public function store(BlogTagRequest $request)
    {
        $data = $request->validated();

        // Générer un slug automatiquement s'il est vide
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        BlogTag::create($data);

        return redirect()
            ->route('backoffice.blog_tags.index')
            ->with('success', 'Tag ajouté avec succès.');
    }

    public function edit(BlogTag $blog_tag)
    {
        return view('backoffice.blog_tags.edit', [
            'tag' => $blog_tag
        ]);
    }

    public function update(BlogTagRequest $request, BlogTag $blog_tag)
    {
        $data = $request->validated();

        // Générer un slug automatiquement s'il est vide
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        $blog_tag->update($data);

        return redirect()
            ->route('backoffice.blog_tags.index')
            ->with('success', 'Tag mis à jour avec succès.');
    }

    public function destroy(BlogTag $blog_tag)
    {
        $blog_tag->delete();

        return redirect()
            ->route('backoffice.blog_tags.index')
            ->with('success', 'Tag supprimé avec succès.');
    }
}
