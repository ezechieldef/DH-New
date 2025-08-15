<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'titre','slug','secteur','image_couverture','gallery','description','resultat','lien_client','ordre','actif'
    ];

    protected $casts = [
        'gallery' => 'array',
        'actif' => 'boolean',
    ];

    protected static function booted()
    {
        static::saving(function (self $project) {
            if (!$project->slug) {
                $project->slug = Str::slug($project->titre);
            }
        });
    }
}