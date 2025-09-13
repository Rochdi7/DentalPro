<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class PageController extends Controller
{
    public function about()
    {
        $latestPosts = BlogPost::with('tags')
            ->where('is_published', true)
            ->orderByDesc('published_at')
            ->take(6)
            ->get();

        return view('frontoffice.pages.about', compact('latestPosts'));
    }

    public function contact()
    {
        return view('frontoffice.pages.contact');
    }

    public function terms()
    {
        return view('frontoffice.pages.terms');
    }

    public function privacy()
    {
        return view('frontoffice.pages.privacy');
    }
}
