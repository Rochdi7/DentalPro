<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class BlogCategory extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','slug','description','parent_id','position','is_active'];

    protected $casts = ['is_active' => 'boolean'];

    protected static function booted()
    {
        static::saving(function ($m) {
            if (empty($m->slug)) $m->slug = Str::slug($m->name);
        });
    }

    public function parent()   { return $this->belongsTo(BlogCategory::class, 'parent_id'); }
    public function children() { return $this->hasMany(BlogCategory::class, 'parent_id')->orderBy('position'); }
    public function posts()    { return $this->hasMany(BlogPost::class); }
}
