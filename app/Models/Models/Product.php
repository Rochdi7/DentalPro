<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'title','slug','description','price','old_price','product_category_id',
        'sku','is_published','meta_title','meta_description','published_at'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'price'        => 'decimal:2',
        'old_price'    => 'decimal:2',
    ];

    protected static function booted()
    {
        static::saving(function ($m) {
            if (empty($m->slug)) $m->slug = Str::slug($m->title);
        });
    }

    // Media collections (Spatie)
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('main_image')->singleFile();
        $this->addMediaCollection('gallery');
        $this->addMediaCollection('pdf_manuals');
        $this->addMediaCollection('videos');
    }

    // Relations
    public function category()  { return $this->belongsTo(ProductCategory::class, 'product_category_id'); }
    public function tags()      { return $this->belongsToMany(ProductTag::class, 'product_tag')->withTimestamps(); }
    public function attributes(){ return $this->hasMany(ProductAttributeValue::class); }
    public function optionGroups(){ return $this->hasMany(ProductOptionGroup::class)->orderBy('sort_order'); }
    public function variants()  { return $this->hasMany(ProductVariant::class); }

    // Helpers
    public function effectivePrice(?ProductVariant $variant = null): string
    {
        $price = $variant && $variant->price_override !== null ? $variant->price_override : $this->price;
        return number_format((float)$price, 2, '.', '');
    }
}
