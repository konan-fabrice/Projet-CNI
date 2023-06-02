<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Profession;

use Illuminate\Database\Eloquent\Model;

class Mere extends Model
{
    protected $table = 'meres';
   
    public $timestamps = true;

    protected $fillable = [
        'nommere',
        'prenommere',
        'datenaissmere',
        'idprofession',
    ];

    public function profession()
    {
        return $this->belongsTo(Profession::class, 'idprofession');
    }
}

