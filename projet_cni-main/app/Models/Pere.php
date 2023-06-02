<?php

namespace App\Models;

use illuminate\Database\Eloquent\Factories\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pere extends Model
{
    protected $table = 'peres';
    protected $primaryKey = 'idpere';
    public $timestamps = true;

    protected $fillable = [
        'nompere',
        'prenompere',
        'datenaisspere',
        'idprofession',
    ];

    public function profession()
    {
        return $this->belongsTo(Profession::class, 'idprofession');
    }
   
}
