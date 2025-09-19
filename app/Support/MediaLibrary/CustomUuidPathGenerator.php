<?php

namespace App\Support\MediaLibrary;

use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CustomUuidPathGenerator implements PathGenerator
{
    public function getPath(Media $media): string
    {
        return "media/{$media->uuid}/";
    }

    public function getPathForConversions(Media $media): string
    {
        return "media/{$media->uuid}/";
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return "media/{$media->uuid}/responsive/";
    }
}
