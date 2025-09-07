<?php

return [

    // ✅ Use Spatie's default model unless you created your own that extends it
    'media_model' => Spatie\MediaLibrary\MediaCollections\Models\Media::class,

    'disk_name' => 'public',
    'conversions_disk' => 'public',

    'max_file_size' => 10 * 1024 * 1024,

    // ✅ Keep these if you have the files in /public/images
    'fallback_url'  => env('APP_URL') . '/images/default-avatar.png',
    'fallback_path' => public_path('images/default-avatar.png'),

    // ✅ Correct namespace to match your file
    'path_generator' => App\Support\MediaLibrary\CustomUuidPathGenerator::class,

];
