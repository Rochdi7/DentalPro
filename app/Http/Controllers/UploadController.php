<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        $path = $request->file('image')->store('uploads');

        // Optimize the image
        ImageOptimizer::optimize(storage_path("app/{$path}"));

        return response()->json(['path' => $path]);
    }
}
