<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    protected $fillable = [
        'titre','slug','icone','excerpt','description','ordre','actif'
    ];

    protected static function booted()
    {
        static::saving(function (self $service) {
            if (!$service->slug) {
                $service->slug = Str::slug($service->titre);
            }
        });
    }
}