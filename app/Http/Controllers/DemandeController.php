<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Demande;
use App\Models\Demandeur;
use App\Models\DocumentDemande;
use Illuminate\Http\Request;
use App\Models\DemandeUtilisateur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\NotificationController;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $segments =request()->segment(2);
        if($segments == "nouveaux"){
            $demandeNotif=new NotificationController();
            $count_demande=$demandeNotif->compteDemande();
            $demandes = Demande::whereNull('isValidated')->orderBy('id','DESC')->get();
        }
        if($segments == "traiter"){
            $demandeNotif = new NotificationController();
            $count_demande = $demandeNotif->compteDemande();
            $demandes = Demande::where('isValidated',1)->where('isAccepted',1)->orderBy('id','DESC')->get();
        }
        return view('admin.demandes.index',compact('count_demande','segments','demandes'));

    }
    public function preValidation(){
        $segments =request()->segment(1);
        $demandeNotif=new NotificationController();
        $count_demande=$demandeNotif->compteDemande();
        $demandes=Demande::where('isValidated',1)->where('isAccepted',null)->orderBy('id','DESC')->get();
        return view('admin.preValidation.preValidation',compact('demandes','count_demande','segments'));
    }
    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function dossierdemande($id)
    {
        $doc = DocumentDemande::where('demande_id',$id)->get();
        $dossier = Demande::FindOrFail($id);
        return view('demandeur.show',compact('dossier','doc'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->file('images'));
        $validation = Validator::make($request->all(),[
            'images' => 'required|max:2048',
        ]);
        if($validation->fails()){
            return redirect()->back()->with(['error'=>'Les documents sont obligatoire']);
        }else{
            $demandeurs = Demandeur::where('user_id',Auth::user()->id)->first();
            $demande = new Demande();
            $demande->type_demande = 'attestation';
            $demande->demandeur_id = $demandeurs->id;
            $demande->save();
            $i = 0;
            foreach ($request->file('images') as $img){
                $document = new DocumentDemande();
                $filename = time().'_'.$img->getClientOriginalName();
                $path = $img->storeAs('uploads',$filename,'public');
                $document->filename = $filename;
                $document->path = $path;
                $document->name = $request->name[$i++];
                $document->demande_id = $demande->id;
                $document->save();
            }
        return back()->with(['success'=>'Votre demande attestation à été effectué avec succès']);
        }
    }

    public function storepasser(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'images' => 'required|max:2048',
            'motif_demande'=>'required'
        ]);
        if($validation->fails()){
            return redirect()->back()->with(['error'=>'Les documents sont obligatoire']);
        }else{
            $demandeurs = Demandeur::where('user_id',Auth::user()->id)->first();
            $demande = new Demande();
            $demande->type_demande = 'laisser passer';
            $demande->demandeur_id = $demandeurs->id;
            $demande->motif_demande = $request->motif_demande;
            $demande->save();
            $document = new DocumentDemande();
            $i = 0;
            foreach ($request->file('images') as $img){
                $document = new DocumentDemande();
                $filename = time().'_'.$img->getClientOriginalName();
                $path = $img->storeAs('uploads',$filename,'public');
                $document->filename = $filename;
                $document->path = $path;
                $document->name = $request->name[$i++];
                $document->demande_id = $demande->id;
                $document->save();
            }
        return back()->with(['success'=>'Votre demande de laisser passer à été effectué avec succès']);
    }

    }

    public function storecarte(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'images' => 'required|max:2048'
        ]);
        if($validation->fails()){
            return redirect()->back()->with(['error'=>'Les documents sont obligatoire']);
        }else{
            $demandeurs = Demandeur::where('user_id',Auth::user()->id)->first();
            $demande = new Demande();
            $demande->type_demande = 'carte';
            $demande->demandeur_id = $demandeurs->id;
            $demande->save();
            $document = new DocumentDemande();
            $i = 0;
            foreach ($request->file('images') as $img){
                $document = new DocumentDemande();
                $filename = time().'_'.$img->getClientOriginalName();
                $path = $img->storeAs('uploads',$filename,'public');
                $document->filename = $filename;
                $document->path = $path;
                $document->name = $request->name[$i++];
                $document->demande_id = $demande->id;
                $document->save();
            }
        return back()->with(['success'=>'Votre demande de carte à été effectué avec succès']);
    }

    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function show($id)
    {
        $demande = Demande::find($id);

        if($demande)
        {
            $demandeur = $demande->demandeur->user->id;
            $demandeurs = Demandeur::where('user_id',$demandeur)->first();
            $demandes = Demande::where('demandeur_id',$demandeurs->id)->first();
            $document = DocumentDemande::where('demande_id',$demandes->id)->first();
            $demandeNotif = new NotificationController();
            $demandeadmin = DemandeUtilisateur::where("demande_id",$id)->get();
            $count_demande = 0; //$demandeNotif->compteDemande();
            $doc = DocumentDemande::where('demande_id',$id)->get();
            return view('admin.demandes.show',compact('demande','count_demande','document','demandeadmin','doc'));
        }else{
            return back()->withError('Erreur! ');
        }

    }


    public function demandeutilisateur(){
        $segments =request()->segment(1);
        $demandeNotif=new NotificationController();
        $count_demande=$demandeNotif->compteDemande();
        $demandeuser = DemandeUtilisateur::where('user_id', Auth::user()->id)->where('action','valider')->get();
        return view('admin.demandes.demandeuser',compact('demandeuser','count_demande','segments'));

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
        if(Auth::user()->hasRole('pdg')){
            $demande=Demande::FindOrFail($id);
            $demande->isValidated = True;
            $demande->isAccepted = True;
            $demande->validated_at = date('Y-m-d');
            $demande->update();

            $gmail = $demande->demandeur->user->email;
            $user =$demande->demandeur->user->id;
            //envoyer l'email a l'utilisateur
            toastr()->success('Prevalidation éffectuée avec succèss');
            return redirect()->route('mailing',$user);
        }else{
            $demande=Demande::FindOrFail($id);
            $demande->isValidated = True;
            $demande->validated_at = date('Y-m-d');
            $demande->update();
        }
        $demandeuser =new DemandeUtilisateur();
        $demandeuser->user_id = Auth::user()->id;
        $demandeuser->demande_id = $demande->id;
        $demandeuser->action = "valider";
        $demandeuser->save();

        toastr()->success('Validation éffectuée avec succèss');
        return back();
    }
    public function rejeterupdate(Request $request, $id)
    {
        $demande=Demande::FindOrFail($id);
        $demande->isDismiss = True;
        $demande->dismissed_at = date('Y-m-d');
        $demande->comment = $request->commentaire;
        $demande->update();

        $demandeuser =new DemandeUtilisateur();
        $demandeuser->user_id = Auth::user()->id;
        $demandeuser->demande_id = $demande->id;
        $demandeuser->action = "rejeter";
        $demandeuser->save();

        toastr()->success('La Demande  rejeter avec succèss');
        return back();
    }

    public function updatevalidation(Request $request, $id)
    {
        $demande=Demande::FindOrFail($id);
        $demande->isAccepted = true;
        $demande->update();

        $gmail = $demande->demandeur->user->email;
        $user =$demande->demandeur->user->id;
        //envoyer l'email a l'utilisateur
        toastr()->success('Prevalidation éffectuée avec succèss');
        return redirect()->route('mailing',$user);

    }

    public function paiement($id){

        $demande=Demande::FindOrFail($id);
        return view('paiement.form',compact('demande'));
    }

    public function retabldemande(Request $request, $id){
        $demande=Demande::FindOrFail($id);
        $demande->isDismiss = FALSE;
        $demande->update();

        $demandeuser =new DemandeUtilisateur();
        $demandeuser->user_id = Auth::user()->id;
        $demandeuser->demande_id = $demande->id;
        $demandeuser->action = "retablir";
        $demandeuser->save();

        toastr()->success('La Demande  rejeter avec succèss');
        return back();
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
