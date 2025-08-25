<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOptionGroup extends Model
{
    protected $fillable = ['product_id','name','type','is_required','sort_order'];

    protected $casts = ['is_required' => 'boolean'];

    public function product() { return $this->belongsTo(Product::class); }
    public function values()  { return $this->hasMany(ProductOptionValue::class)->orderBy('sort_order'); }
}
