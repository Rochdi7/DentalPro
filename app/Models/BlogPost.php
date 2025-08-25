<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class BlogPost extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'title','slug','excerpt','body','blog_category_id',
        'is_published','published_at','video_url','video_provider',
        'meta_title','meta_description'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    protected static function booted()
    {
        static::saving(function ($m) {
            if (empty($m->slug)) $m->slug = Str::slug($m->title);
        });
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('cover')->singleFile();
        $this->addMediaCollection('gallery');
    }

    public function category() { return $this->belongsTo(BlogCategory::class, 'blog_category_id'); }
    public function tags()     { return $this->belongsToMany(BlogTag::class, 'blog_post_tag')->withTimestamps(); }
}
