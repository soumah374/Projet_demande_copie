<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class NotificationController extends Controller
{
    public function compteDemande(){
        $demande=User::where('demande',1)->where('actifs',0)->count();
        return $demande;
    }
}
