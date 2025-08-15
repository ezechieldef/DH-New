<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['auteur','role','societe','note','message','ordre','actif'];
    protected $casts = ['actif'=>'boolean'];
}