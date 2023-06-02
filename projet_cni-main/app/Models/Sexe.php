<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sexe extends Model
{
    protected $table = 'sexes';
   
    public $timestamps = false;

    protected $fillable = [
        'libellesexe',
    ];

    // Relations avec d'autres tables

    // ...
}
