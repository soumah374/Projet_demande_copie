@extends('layout.app')
@section('content')
<div class="col-md-12">
    <div class="card">
      <div class="card-header p-2 col-md-12">
        <ul class="nav nav-pills">
          <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profil</a></li>
        </ul>
      </div>
      <div class="card-body">
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <div class="row col-md-10 center">
                <fieldset class="h1 ">Veuillez completer votre profil</fieldset>
            <br><br>
            @if(session()->has('success'))
            <div id="casser" class="alert alert-success col-12">{{session('success')}} </div>
            @endif
            <form action="{{route('demandeursoumis')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="text" value="{{Auth::user()->id}}" readonly name="identifiant" class="form-control  @error('identifiant') is-invalid @enderror" hidden>
                        @error('identifiant')<span class="text text-danger">{{$message}}</span>@enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label>Nom Père*</label>
                        <input type="text" name="nom_pere" value="{{$demandeur ? $demandeur->nom_pere : old('nom_pere')}}" class="form-control  @error('nom_pere') is-invalid @enderror">
                        @error('nom_pere')<span class="text text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nom Mere*</label>
                        <input type="text" value="{{$demandeur ? $demandeur->nom_mere: old('nom_mere')}}" name="nom_mere" class="form-control  @error('nom_mere') is-invalid @enderror">
                        @error('nom_mere')<span class="text text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Adresse*</label>
                        <input type="text" value="{{$demandeur ? $demandeur->adresse :  old('adresse')}}" name="adresse" class="form-control  @error('adresse') is-invalid @enderror">
                        @error('adresse')<span class="text text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Date de Naissance*</label>
                        <input type="date" value="{{$demandeur ? $demandeur->date_naissance : old('date_naissance')}}" name="date_naissance" class="form-control  @error('date_naissance') is-invalid @enderror">
                        @error('date_naissance')<span class="text text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Lieu de Naissance*</label>
                        <input type="text" value="{{$demandeur ? $demandeur->lieu_naissance : old('lieu_naissance')}}" name="lieu_naissance" class="form-control  @error('lieu_naissance') is-invalid @enderror">
                        @error('lieu_naissance')<span class="text text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Telephone*</label>
                        <input type="text" value="{{$demandeur ? $demandeur->telephone :  old('telephone')}}" name="telephone" class="form-control  @error('telephone') is-invalid @enderror">
                        @error('telephone')<span class="text text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Taille*</label>
                        <input type="number" value="{{$demandeur ? $demandeur->taille :  old('telephone')}}" name="taille" max="250"  class="form-control  @error('taille') is-invalid @enderror">
                        @error('taille')<span class="text text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="from-group col-md-6">
                        <label for="genre">Genre*</label>
                        <select class="form-control" name="genre" id="genre">
                            <option value="masculin" {{ $demandeur && $demandeur->genre == 'masculin' ? 'selected' :''  }}>Masculin</option>
                            <option value="feminin" {{ $demandeur && $demandeur->genre == 'feminin' ? 'selected' :''  }} >Feminin</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 mt-5">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

