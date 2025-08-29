<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class BlogCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
        'position',
        'is_active',
    ];

    protected $casts = [
        'position'   => 'integer',
        'is_active'  => 'boolean',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /** Relationships */
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id')->orderBy('position');
    }

    public function posts()
    {
        return $this->hasMany(BlogPost::class, 'blog_category_id');
    }

    /** Scopes */
    public function scopeActive($q)
    {
        return $q->where('is_active', true);
    }

    /** Mutators */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        if (empty($this->attributes['slug'])) {
            $base = Str::slug(Str::limit($value, 80, ''));
            $slug = $base;
            $i = 1;
            while (static::withTrashed()->where('slug', $slug)->exists()) {
                $slug = "{$base}-{$i}";
                $i++;
            }
            $this->attributes['slug'] = $slug;
        }
    }
}
