@extends('layout.master')
@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-file"></i> Liste des demandeurs</h1>
            <p>Cet onglet permet d'afficher la liste des demandeurs retenus</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Liste des demandeur</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="sampleTable">
                        <thead>
                            <th>N°</th>
                            <th>Date Demande</th>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Type de Demande</th>
                            <th>Genre</th>
                            <th>Date Naissance</th>
                            <th>Lieu Naissance</th>
                            <th>Telephone</th>
                            <th>Adresse</th>
                            <th><i class="fa fa-folder-open"></i></th>
                        </thead>
                        <tbody>
                            @foreach($demande as $key=> $demand)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{substr($demand->created_at, 0, 10)}}</td>
                                <td>{{$demand->prenom}}</td>
                                <td>{{$demand->nom}}</td>
                                <td>{{$demand->type_demande}}</td>
                                <td>{{$demand->genre}}</td>
                                <td>{{$demand->date_naissance}}</td>
                                <td>{{$demand->lieu_naissance}}</td>
                                <td>{{$demand->telephone}}</td>
                                <td>{{$demand->adresse}}</td>
                                <td>
                                    <a href="{{route('admins.demande.show',$demand->id)}}" class="btn btn-info"><i class="fa fa-folder-open"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
