@extends('layout.app')
@section('content')

<div class="container-fluid pt-3 " style="background-color: #fff;">
    <div class="row col-10 center">
        <fieldset class="h1 ">Veuillez completer votre profil</fieldset>

    <br><br>
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
                <label>Date de Naissance*</label>
                <input type="date" value="{{$demandeur ? $demandeur->date_naissance : old('date_naissance')}}" name="date_naissance" class="form-control  @error('date_naissance') is-invalid @enderror">
                @error('date_naissance')<span class="text text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-group col-md-6">
                <label>Lieu Naissance*</label>
                <input type="text" value="{{$demandeur ? $demandeur->lieu_naissance : old('lieu_naissance')}}" name="lieu_naissance" class="form-control  @error('lieu_naissance') is-invalid @enderror">
                @error('lieu_naissance')<span class="text text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-group col-md-6">
                <label>Telephone*</label>
                <input type="text" value="{{$demandeur ? $demandeur->telephone :  old('telephone')}}" name="telephone" class="form-control  @error('telephone') is-invalid @enderror">
                @error('telephone')<span class="text text-danger">{{$message}}</span>@enderror
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
@endsection
