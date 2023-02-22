<?php

namespace App\Http\Controllers;


use PDF;
use App\Models\Demande;
use App\Models\Demandeur;
use Illuminate\Http\Request;
use App\Models\DocumentDemandeur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DocumentDemandeurController extends Controller
{

    public function voirdocument()
    {
        $demandeur = Demandeur::where('user_id',Auth::user()->id)->first();
        $demande = new Demande();
        $users = Auth::user();
        $demande = Demande::where('demandeur_id',$demandeur->id)->first();
        $demande_type = 'attestation';
        $demande_laisser = 'laisser passer';
        $data = [
            'date' => date('m/d/Y'),
            'demande' => $demande,
            'demandeur' => $demandeur,
            'users'=>$users,
        ];
        if($demande->type_demande == $demande_type){
            $pdf = PDF::loadView('documents.attestation', $data);
        }elseif($demande->type_demande == $demande_laisser){
            $pdf = PDF::loadView('documents.laisserpasser', $data);
        }else{
            $pdf = PDF::loadView('documents.carte', $data);
        }
        return $pdf->download($demande->type_demande.'.pdf');
    }


}
