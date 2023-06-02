<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statut extends Model
{
    protected $table = 'statut';
    protected $primaryKey = 'idstatut';
    public $timestamps = false;

    protected $fillable = [
        'libstatut',
    ];
}
