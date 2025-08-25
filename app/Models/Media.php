<?php

namespace App\Models;

use Spatie\MediaLibrary\MediaCollections\Models\Media as BaseMedia;
use Illuminate\Support\Str;

class Media extends BaseMedia
{
    protected static function booted()
    {
        static::creating(function ($media) {
            // Generate short 8-character UUID
            $media->uuid = substr((string) Str::uuid(), 0, 8);
        });
    }
}
