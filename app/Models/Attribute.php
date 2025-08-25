<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = [
        'name','code','type','unit','is_filterable','is_visible'
    ];

    protected $casts = [
        'is_filterable' => 'boolean',
        'is_visible'    => 'boolean',
    ];

    public function options()
    {
        return $this->hasMany(AttributeOption::class)->orderBy('sort_order');
    }
}
