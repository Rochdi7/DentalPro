<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $timestamps = true;
    protected $fillable = ['key','value'];
    protected $casts = ['value' => 'array'];

    // helper
    public static function get(string $key, $default = null)
    {
        return optional(static::query()->firstWhere('key', $key))->value ?? $default;
    }
}
