<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeOption extends Model
{
    protected $fillable = ['attribute_id','value','sort_order'];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
