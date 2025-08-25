<?php

use Illuminate\Support\Facades\Route;
use App\Models\Media;
use Illuminate\Support\Facades\Response;
// Custom media route for UUID-based URLs
Route::get('/media/{uuid}/{conversion}.jpg', function ($uuid, $conversion) {
$media = Media::where('uuid', $uuid)->firstOrFail();


$conversion = $conversion === 'original' ? '' : $conversion;
$path = $media->getPath($conversion);


abort_unless(file_exists($path), 404);


return Response::file($path);
})->where('conversion', '[a-zA-Z0-9_-]+');
// Load Frontoffice routes
require __DIR__ . '/frontoffice.php';

// Load Backoffice routes
require __DIR__ . '/backoffice.php';
