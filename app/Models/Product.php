<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Manipulations as ImageManipulations;

class Product extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'old_price',
        'product_category_id',
        'sku',
        'is_published',
        'is_hot',          // ✅ NEW
        'is_occasion',     // ✅ NEW
        'meta_title',
        'meta_description',
        'published_at',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'is_hot'       => 'boolean',   // ✅ NEW
        'is_occasion'  => 'boolean',   // ✅ NEW
        'published_at' => 'datetime',
        'price'        => 'decimal:2',
        'old_price'    => 'decimal:2',
    ];

    protected static function booted()
    {
        static::saving(function ($product) {
            if (empty($product->slug)) {
                $baseSlug = Str::slug($product->title);
                $slug = $baseSlug;
                $counter = 1;

                while (
                    static::where('slug', $slug)
                    ->when($product->exists, fn($q) => $q->where('id', '!=', $product->id))
                    ->exists()
                ) {
                    $slug = $baseSlug . '-' . $counter++;
                }

                $product->slug = $slug;
            }
        });
    }

    /**
     * Media collections (Spatie Media Library)
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('main_image')->singleFile();
        $this->addMediaCollection('gallery');
    }

    /**
     * Category relationship
     */
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(ProductTag::class, 'product_tag', 'product_id', 'product_tag_id');
    }

    /**
     * Product variants relationship
     */
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    /**
     * Product characteristics relationship
     */
    public function characteristics()
    {
        return $this->hasMany(ProductCharacteristic::class)->orderBy('position');
    }

    /**
     * Accessor: Discount %
     */
    public function getDiscountPercentageAttribute(): ?int
    {
        if (!$this->old_price || $this->old_price <= $this->price) {
            return null;
        }

        return (int) round((($this->old_price - $this->price) / $this->old_price) * 100);
    }

    /**
     * Scopes utiles
     */
    public function scopeHot($query)
    {
        return $query->where('is_hot', true);
    }

    public function scopeOccasion($query)
    {
        return $query->where('is_occasion', true);
    }
    public function isInWishlist(): bool
    {
        $sessionId = session()->getId();

        return $this->wishlists()
            ->where('session_id', $sessionId)
            ->exists();
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function registerMediaConversions(?\Spatie\MediaLibrary\MediaCollections\Models\Media $media = null): void
{
    $this->addMediaConversion('thumb')
        ->width(300)
        ->height(300)
        ->sharpen(10)
        ->format('webp')
        ->nonQueued();
}

}
