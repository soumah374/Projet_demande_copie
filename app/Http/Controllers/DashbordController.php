<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Demande;
use App\Models\Demandeur;
use App\Http\Controllers\NotificationController;
use FFI;
use Illuminate\Support\Facades\Auth;

class DashbordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demandeNotif = new NotificationController();
        $count_demande = 0; //$demandeNotif->compteDemande();
        $demandes = [];
        $last_demande = null;
        $demandeur = null;
        if(Auth::user()->hasRole('admin')){
            $demandes = Demande::paginate(10);
            $count_demande = Demande::where('isValidated',Null)->count();
            $count_demandevalide = Demande::where('isValidated',True)->count();
            return view('admin.dashbords.index', compact('count_demande','demandes','count_demandevalide'));
        }
        if(Auth::user()->hasRole('demandeur')){
            $demandeurnb = Demandeur::where('user_id',Auth::user()->id)->first();
            $count_demande = Demande::where('demandeur_id',$demandeurnb->id)->where('isValidated',Null)->count();
            $count_demandevalide = Demande::where('demandeur_id',$demandeurnb->id)->where('isValidated',True)->count();
            $demandeur = Demandeur::where('user_id',Auth::user()->id)->first();
            $demandes = Demande::where('demandeur_id',$demandeur->id)->get();
            $last_demande = $demandes->last();
            //dd($demandes);
            return view('admin.dashbords.index',compact('last_demande','demandeur','count_demande','demandes','count_demandevalide'));
        }
        if(Auth::user()->hasRole('utilisateur')){
            return view('admin.dashbords.index');
        }
        return view('admin.dashbords.index', compact('last_demande','demandeur'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
