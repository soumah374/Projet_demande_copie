<?php

namespace App\Models;

use App\Models\Demandeur;
use App\Models\DocumentDemandeur;
use App\Models\DemandeUtilisateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Demande extends Model
{
    use HasFactory;

    public function demandeur()
    {
        return $this->belongsTo(Demandeur::class);
    }
    public function demandeutilisateur()
    {
        return $this->hasMany(DemandeUtilisateur::class);
    }

    public function documentdemandes()
    {
        return $this->hasMany(DocumentDemandeur::class);
    }

    protected $fillable = [
        'type_demande'
    ];
}
