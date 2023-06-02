<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $table = 'professions';
    protected $primaryKey = 'idprofession';
    protected $fillable = [
        'libprofession',
    ];

}
