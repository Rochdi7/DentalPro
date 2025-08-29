<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Requests\BlogPostRequest;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class BlogPostController extends Controller
{
    public function index(Request $request)
    {
        $posts = BlogPost::with(['category', 'tags'])
            ->when($request->q, fn($q, $search) =>
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('slug', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
            )
            ->latest('published_at')
            ->paginate(15);

        return view('backoffice.blog_posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = BlogCategory::active()->orderBy('name')->get();
        $tags = BlogTag::orderBy('name')->get();

        return view('backoffice.blog_posts.create', compact('categories', 'tags'));
    }

    public function store(BlogPostRequest $request)
    {
        $data = $request->validated();

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        $post = BlogPost::create($data);

        // Attach tags
        if (!empty($data['tag_ids'])) {
            $post->tags()->sync($data['tag_ids']);
        }

        // Attach cover image
        if ($request->hasFile('cover')) {
            $post->addMediaFromRequest('cover')->toMediaCollection('cover');
        }

        // Attach multiple gallery images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $post->addMedia($image)->toMediaCollection('images');
            }
        }

        return redirect()
            ->route('backoffice.blog_posts.index')
            ->with('success', 'Article publié avec succès.');
    }

    public function edit(BlogPost $blog_post)
    {
        $categories = BlogCategory::active()->orderBy('name')->get();
        $tags = BlogTag::orderBy('name')->get();

        return view('backoffice.blog_posts.edit', [
            'post' => $blog_post,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    public function update(BlogPostRequest $request, BlogPost $blog_post)
    {
        $data = $request->validated();

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        $blog_post->update($data);

        // Sync tags
        $blog_post->tags()->sync($data['tag_ids'] ?? []);

        // Replace cover image
        if ($request->hasFile('cover')) {
            $blog_post->clearMediaCollection('cover');
            $blog_post->addMediaFromRequest('cover')->toMediaCollection('cover');
        }

        // Optionally sync gallery images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $blog_post->addMedia($image)->toMediaCollection('images');
            }
        }

        return redirect()
            ->route('backoffice.blog_posts.index')
            ->with('success', 'Article mis à jour avec succès.');
    }

    public function destroy(BlogPost $blog_post)
    {
        $blog_post->delete();

        return redirect()
            ->route('backoffice.blog_posts.index')
            ->with('success', 'Article supprimé.');
    }
}
