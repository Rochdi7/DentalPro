<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Models\Media;
use App\Http\Controllers\UploadController;

/*
|--------------------------------------------------------------------------
| Custom Media Route (UUID-based URLs)
|--------------------------------------------------------------------------
*/
Route::get('/media/{uuid}/{conversion}.jpg', function ($uuid, $conversion) {
    $media = Media::where('uuid', $uuid)->firstOrFail();

    $conversion = $conversion === 'original' ? '' : $conversion;
    $path = $media->getPath($conversion);

    abort_unless(file_exists($path), 404);

    return Response::file($path);
})->where('conversion', '[a-zA-Z0-9_-]+');

/*
|--------------------------------------------------------------------------
| File Upload Route (with Optimization)
|--------------------------------------------------------------------------
*/
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');

/*
|--------------------------------------------------------------------------
| Frontoffice & Backoffice Routes
|--------------------------------------------------------------------------
*/
require __DIR__ . '/frontoffice.php';
require __DIR__ . '/backoffice.php';
