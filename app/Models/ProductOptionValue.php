<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOptionValue extends Model
{
    protected $fillable = ['product_option_group_id','value','code','sort_order'];

    public function group()
    {
        return $this->belongsTo(ProductOptionGroup::class, 'product_option_group_id');
    }

    public function variantValues()
    {
        return $this->hasMany(ProductVariantValue::class, 'product_option_value_id');
    }
}
