<?php

namespace App\MediaLibrary;

use Spatie\MediaLibrary\Support\UrlGenerator\DefaultUrlGenerator;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CustomUrlGenerator extends DefaultUrlGenerator
{
    public function getUrl(): string
    {
        /** @var Media $media */
        $media = $this->media;

        $conversion = $this->conversion?->getName(); // ✅ This is the correct way

        if (!empty($conversion)) {
            return "/media/{$media->uuid}/{$conversion}.jpg";
        }

        return "/media/{$media->uuid}/original.jpg";
    }
}
