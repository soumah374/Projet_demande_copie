@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-12">
    <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <p><strong class="titre_demande">Prénom et nom :</strong> {{$dossier->demandeur->user->prenom ." ".$dossier->demandeur->user->name}}</p>
                </div>
                <div class="col-md-12">
                    <p><strong class="titre_demande">Téléphone :</strong> {{$dossier->demandeur->telephone}}</p>
                </div>
                <div class="col-md-12">
                    <p><strong class="titre_demande">Type de la demande :</strong> {{$dossier->type_demande}}</p>
                </div>
                <div class="col-md-12">
                    <p><strong class="titre_demande">Email :</strong> {{$dossier->demandeur->user->email}}</p>
                </div>
                <div class="col-md-12">
                    <p><strong class="titre_demande">Genre :</strong> {{$dossier->demandeur->genre}}</p>
                </div>
                <div class="col-md-12">
                    <p><strong class="titre_demande">Taille :</strong> {{$dossier->demandeur->taille}}</p>
                </div>
                <div class="col-md-12">
                    <p><strong class="titre_demande">Adresse :</strong> {{$dossier->demandeur->adresse}}</p>
                </div>
                <div class="col-md-12">
                    <p><strong class="titre_demande">Date de naissance :</strong> {{$dossier->demandeur->date_naissance}}</p>
                </div>
                <div class="col-md-12">
                    <p><strong class="titre_demande">Lieu de naissance :</strong> {{$dossier->demandeur->lieu_naissance}}</p>
                </div>
                <div class="col-md-12">
                    <p><strong class="titre_demande">Filiation du père :</strong> {{$dossier->demandeur->nom_pere}}</p>
                </div>
                <div class="col-md-12">
                    <p><strong class="titre_demande">Filiation de la mère :</strong> {{$dossier->demandeur->nom_mere}}</p>
                </div>


                <div class="tab-pane" id="detail">
                    <div class="row col-md-10 center">
                        <p class="h1 ">Liste des doucments</p>
                        <div class="row">
                           @foreach ($doc as $docs)
                           @if ($docs->name=="photo")
                           <div class="card mr-1 col-md-5">
                            <img src="{{asset('storage/' . $docs->path)}}" class="card-img-top" alt="...">
                           {{--  {{Storage::url($dossier->documentdemande->path)}} --}}
                            <div class="card-body ">
                              <p class="card-text">Photo d'identité</p>
                            </div>
                          </div>
                           @endif
                           @if ($docs->name=="photo signature")
                           <div class="card mr-1 col-md-5">
                            <img src="{{asset('storage/uploads/' . $docs->filename)}}" class="card-img-top" alt="...">
                           {{--  {{Storage::url($dossier->documentdemande->path)}} --}}
                            <div class="card-body ">
                              <p class="card-text">Photo Signature</p>
                            </div>
                          </div>
                           @endif
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

</div>
@endsection
