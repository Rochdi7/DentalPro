<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
        'session_id',
        'product_id',
        'product_variant_id',
        'quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class)->with('media');
    }
}
