<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCharacteristic extends Model
{
    protected $table = 'product_characteristics';

    protected $fillable = [
        'product_id',
        'attribute_name',   // <- colonne réelle en DB
        'value',
        'position',
    ];

    protected $casts = [
        'position' => 'integer',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('position')->orderBy('id');
    }

    protected static function booted()
    {
        static::saving(function ($model) {
            if ($model->position === null) {
                $model->position = 0;
            }
        });
    }
}
