<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentDemande extends Model
{
    use HasFactory;

    public function demandes()
    {
        return $this->belongsTo(Demande::class);
    }
}
