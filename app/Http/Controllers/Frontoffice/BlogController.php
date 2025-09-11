<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Models\Product;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with('media') // if using Spatie Media Library
            ->where('is_published', true)
            ->orderByDesc('published_at')
            ->paginate(9); // or any number per page

        return view('frontoffice.blog.index', compact('posts'));
    }

    public function show(string $slug)
    {
        $post = BlogPost::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        // Articles liés (même catégorie, exclure l'article en cours)
        $relatedPosts = BlogPost::where('is_published', true)
            ->where('id', '!=', $post->id)
            ->when($post->category_id, function ($query) use ($post) {
                $query->where('blog_category_id', $post->category_id);
            })
            ->latest('published_at')
            ->take(6)
            ->get();

        // Catégories de blog (pour sidebar)
        $categories = \App\Models\BlogCategory::where('is_active', true)
            ->orderBy('position', 'asc')
            ->get();

        // Produits associés (par tags du post, ou aléatoire si aucun)
        $relatedProducts = collect();
        if ($post->tags->count()) {
            $relatedProducts = \App\Models\Product::whereHas('tags', function ($q) use ($post) {
                $q->whereIn('slug', $post->tags->pluck('slug'));
            })
                ->take(5)
                ->get();
        }

        if ($relatedProducts->isEmpty()) {
            // fallback : quelques produits aléatoires
            $relatedProducts = \App\Models\Product::inRandomOrder()->take(5)->get();
        }

        return view('frontoffice.blog.show', compact('post', 'relatedPosts', 'categories', 'relatedProducts'));
    }

    public function category(string $slug)
    {
        $category = BlogCategory::where('slug', $slug)->firstOrFail();

        $posts = $category->posts()
            ->where('is_published', true)
            ->latest('published_at')
            ->paginate(9);

        return view('frontoffice.blog.category', compact('category', 'posts'));
    }
}
