<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'titre','slug','image','excerpt','contenu','publie_at','status'
    ];

    protected $dates = ['publie_at'];

    public function scopePublie($query)
    {
        return $query->where('status','publie')->whereNotNull('publie_at')->where('publie_at','<=', now());
    }

    protected static function booted()
    {
        static::saving(function (self $post) {
            if (!$post->slug) {
                $post->slug = Str::slug($post->titre);
            }
        });
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}