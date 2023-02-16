<?php

namespace App\Http\Controllers;

use App\Models\Demandeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DemandeursController extends Controller
{
   public function store(Request $request){

    $validation = Validator::make($request->all(),[
        'nom_pere' => 'bail|required',
        'nom_mere' => 'bail|required',
        'lieu_naissance' => 'bail|required',
        'date_naissance' => 'bail|required',
        'genre' => 'bail|required',
        'telephone' => 'bail|required',
    ]);
    if($validation->fails()){
        return redirect()->back()->withErrors($validation)->withInput();

    }else{

        $demandeur = Demandeur::where('users_id', Auth::user()->id)->first();
        if($demandeur !== null){
            $demandeur->telephone = $request->telephone;
            $demandeur->nom_pere = $request->nom_pere;
            $demandeur->nom_mere = $request->nom_mere;
            $demandeur->lieu_naissance = $request->lieu_naissance;
            $demandeur->date_naissance = $request->date_naissance;
            $demandeur->update();
            toastr()->success("Votre compte a été modifier avec succès ");
            return redirect()->back();
        } else{

            $demandeurs = new Demandeur();
            $demandeurs->telephone = $request->telephone;
            $demandeurs->nom_pere = $request->nom_pere;
            $demandeurs->nom_mere = $request->nom_mere;
            $demandeurs->lieu_naissance = $request->lieu_naissance;
            $demandeurs->date_naissance = $request->date_naissance;
            $demandeurs->users_id = $request->identifiant;
            $demandeurs->save();
            toastr()->success("Votre compte a été completer avec succès ");
            return redirect()->back();
        }

    }
   }

   public function profile(){
    $ldemande = Demandeur::where('users_id',Auth::user()->id)->first();
    return view('demandeur.index',compact('ldemande'));
    }

    public function show(){
        return view('demandeur.index');
    }

    public function completprofil(){
        return view('demandeur.completprofil');
    }

}
