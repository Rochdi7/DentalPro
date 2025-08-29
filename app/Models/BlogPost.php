<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class BlogPost extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'blog_category_id',
        'is_published',
        'published_at',
        'video_url',
        'video_provider',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    // Prefer slug in routes
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /** Relationships */
    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }

    public function tags()
{
    return $this->belongsToMany(BlogTag::class, 'blog_post_tag', 'blog_post_id', 'blog_tag_id');
}

    /** Scopes */
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    public function scopeScheduled($query)
    {
        return $query->where('is_published', true)
            ->where('published_at', '>', now());
    }

    public function scopeSearch($query, ?string $q)
    {
        if (!$q) return $query;
        return $query->where(function ($s) use ($q) {
            $s->where('title', 'like', "%{$q}%")
              ->orWhere('excerpt', 'like', "%{$q}%")
              ->orWhere('body', 'like', "%{$q}%");
        });
    }

    /** Mutators */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        // Auto-generate slug if missing
        if (empty($this->attributes['slug'])) {
            $base = Str::slug(Str::limit($value, 80, ''));
            $slug = $base;
            $i = 1;
            while (static::withTrashed()->where('slug', $slug)->exists()) {
                $slug = "{$base}-{$i}";
                $i++;
            }
            $this->attributes['slug'] = $slug;
        }
    }

    /** Media Library */
    public function registerMediaCollections(): void
    {
        // Single main image
        $this->addMediaCollection('cover')
            ->useFallbackUrl('/images/placeholders/post-cover.jpg')
            ->useFallbackPath(public_path('images/placeholders/post-cover.jpg'))
            ->singleFile();

        // Additional images
        $this->addMediaCollection('images');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        // Square thumbnail
        $this->addMediaConversion('thumb')
            ->fit('crop', 300, 300)
            ->sharpen(8)
            ->nonQueued();

        // Card size
        $this->addMediaConversion('card')
            ->width(768)
            ->height(432)
            ->nonQueued();

        // Large banner
        $this->addMediaConversion('banner')
            ->width(1600)
            ->height(900)
            ->performOnCollections('cover', 'images');
    }

    /** Helpers */
    public function publish(?\DateTimeInterface $at = null): void
    {
        $this->is_published = true;
        $this->published_at = $at ?? now();
        $this->save();
    }
}
