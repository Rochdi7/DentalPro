<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class ProductCategory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
        'position',
        'is_active',
        'meta_title',
        'meta_description'
    ];

    protected static function booted()
    {
        static::saving(function ($m) {
            if (empty($m->slug)) $m->slug = Str::slug($m->name);
        });
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Get the parent category.
     */
    public function parent()
    {
        return $this->belongsTo(ProductCategory::class, 'parent_id');
    }

    /**
     * Get the subcategories (direct children).
     */
    public function children()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id');
    }

    /**
     * Get all descendants (children, grandchildren, etc.).
     * This is a recursive relationship.
     */
    public function descendants()
    {
        return $this->children()->with('descendants');
    }

    /**
     * Get the products for this specific category.
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'product_category_id');
    }

    /**
     * Get all products for this category and its subcategories (all descendants).
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function allProducts()
    {
        // Get the IDs of all descendant categories recursively
        $descendantIds = $this->descendants()->get()->flatMap(function ($category) {
            return array_merge([$category->id], $category->descendants->pluck('id')->all());
        })->all();
        
        // Combine the current category's ID with all descendant IDs
        $categoryIds = array_merge([$this->id], $descendantIds);
        
        // Return a query builder for all products in these categories
        return Product::whereIn('product_category_id', $categoryIds);
    }
}