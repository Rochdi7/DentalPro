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


    public function parent()
    {
        return $this->belongsTo(ProductCategory::class, 'parent_id');
    }
    public function children()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'product_category_id');
    }

    
}
