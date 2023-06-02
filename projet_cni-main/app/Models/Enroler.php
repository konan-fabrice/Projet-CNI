<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enroler extends Model
{
    protected $primaryKey = 'idenrolant';

    protected $table = 'enrolers';
    
    public $timestamps = true;

    protected $fillable = [
        'nom',
        'prenom',
        'datenaissance',
        'heurenaissance',
        'lieunaissance',
        'nni',
        'taille',
        'lienphoto',
        'lienempreinte',
        'liensignature',
        'visa',
        'signataire',
        'dateemission',
        'dateexpiration',
        'dateenrolement',
        'telephone',
        'idstatut',
        'idpays',
        'idsexe',
        'idprofession',
        'idmere',
        'idpere',
    ];

    // Relations avec d'autres tables

    public function pays()
    {
        return $this->belongsTo(Pays::class, 'idpays', 'idpays');
    }

    public function sexe()
    {
        return $this->belongsTo(Sexe::class, 'idsexe', 'idsexe');
    }
    public function statut()
    {
        return $this->belongsTo(Statut::class, 'idstatut', 'idstatut');
    }

    public function profession()
    {
        return $this->belongsTo(Profession::class, 'idprofession', 'idprofession');
    }

    public function mere()
    {
        return $this->belongsTo(Mere::class, 'idmere', 'idmere');
    }

    public function pere()
    {
        return $this->belongsTo(Pere::class, 'idpere', 'idpere');
    }
}
