<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    protected $table = 'pays';
    protected $primaryKey = 'idpays';
    public $timestamps = false;

    protected $fillable = [
        'libpays',
    ];
}
