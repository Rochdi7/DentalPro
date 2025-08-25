<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $fillable = [
        'product_id','sku','price_override','old_price_override','stock_qty','is_default'
    ];

    protected $casts = [
        'price_override'     => 'decimal:2',
        'old_price_override' => 'decimal:2',
        'is_default'         => 'boolean',
    ];

    public function product() { return $this->belongsTo(Product::class); }
    public function values()  { return $this->hasMany(ProductVariantValue::class); }
}
