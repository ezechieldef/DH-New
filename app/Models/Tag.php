<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    protected $fillable = ['nom','slug'];

    protected static function booted()
    {
        static::saving(function (self $tag) {
            if (!$tag->slug) {
                $tag->slug = Str::slug($tag->nom);
            }
        });
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}