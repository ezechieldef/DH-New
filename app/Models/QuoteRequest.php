<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    protected $fillable = [
        'nom','email','telephone','entreprise','budget','delai','description_projet','statut'
    ];
}