<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductTag;

class TagController extends Controller
{
    public function show($slug)
    {
        $tag = ProductTag::where('slug', $slug)->firstOrFail();
        $products = $tag->products()->with(['media', 'characteristics', 'tags'])->get();

        return view('frontoffice.tags.show', compact('tag', 'products'));
    }
}
