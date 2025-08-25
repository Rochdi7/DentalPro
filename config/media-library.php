<?php

return [

    'media_model' => App\Models\Media::class,

    'media_collection' => Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection::class,

    'disk_name' => 'public',

    'conversions_disk' => 'public',

    'max_file_size' => 10 * 1024 * 1024,

    // ✅ Avoid asset() here to prevent UrlGenerator errors
    'fallback_url' => env('APP_URL') . '/images/default-avatar.png',

    'fallback_path' => public_path('images/default-avatar.png'),
    
    'url_generator' => App\MediaLibrary\CustomUrlGenerator::class,

];
