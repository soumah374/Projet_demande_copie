<?php

namespace App\Models;

use App\Models\User;
use App\Models\Demande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DemandeUtilisateur extends Model
{
    use HasFactory;

    public function demande()
    {
        return $this->belongsTo(Demande::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
