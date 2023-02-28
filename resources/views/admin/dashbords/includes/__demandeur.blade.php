@if (Auth::user()->hasRole('demandeur'))
<div class="row">
    <div class="col-md-3">
        <form action="{{route('demande.attestation')}}" method="post" enctype="multipart/form-data" >
            @csrf
            @if(!$demandes->where('type_demande','attestation')->whereNull('isValidated')->count() > 0)
                 <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal" style="background-color: #1AA059; border:none">Attestation</button>
            @endif
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Vous voulez effectuer une demande d'attestation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <div class="row col-md-10 center">
                                <fieldset class="h3 ">Veuillez ajouter vos documents</fieldset>
                            <br><br>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Photo*</label>
                                        <input type="hidden" name="name[]" value="photo">
                                        <input type="file" name="images[]"  class="form-control  @error('images') is-invalid @enderror">
                                        @error('images')<span class="text text-danger">{{$message}}</span>@enderror
                                    </div>
                                     <div class="form-group col-md-12">
                                        <label>Photo signature*</label>
                                        <input type="hidden" name="name[]" value="photo signature">
                                        <input type="file" name="images[]"  class="form-control  @error('image_signature') is-invalid @enderror">
                                        @error('image_signature')<span class="text text-danger">{{$message}}</span>@enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Piece d'identité*</label>
                                        <input type="hidden" name="name[]" value="piece d'identite">
                                        <input type="file" name="images[]"  class="form-control  @error('image_signature') is-invalid @enderror">
                                        @error('image_signature')<span class="text text-danger">{{$message}}</span>@enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for=""  data-toggle="collapse" href="#IconLeftCollapseOne">Autre +</label>
                                        <div id="IconLeftCollapseOne" class="card-body collapse ">
                                            <label for="">Type de fichier</label>
                                            <input type="text" name="name[]" value="" class="form-control mb-3">
                                            <input type="file" name="images[]"  class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Oui</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3">
        <form action="{{route('demande.carte')}}" method="post" enctype="multipart/form-data" >
            @csrf
            @if(!$demandes->where('type_demande','carte')->whereNull('isValidated')->count() > 0)
                <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModalss" style="background-color: #1AA059; border:none">Carte</button>
            @endif
            <div class="modal fade" id="exampleModalss" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Vous voulez effectuer une demande de carte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <div class="row col-md-10 center">
                                <fieldset class="h3 ">Veuillez ajouter vos documents</fieldset>
                            <br><br>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Photo*</label>
                                        <input type="hidden" name="name[]" value="photo">
                                        <input type="file" name="images[]"  class="form-control ">
                                    </div>
                                     <div class="form-group col-md-12">
                                        <label>Photo signature*</label>
                                        <input type="hidden" name="name[]" value="photo signature">
                                        <input type="file" name="images[]"  class="form-control  ">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for=""  data-toggle="collapse" href="#IconLeftCollapseOne">Autre +</label>
                                        <div id="IconLeftCollapseOne" class="card-body collapse ">
                                            <label for="">Type de fichier</label>
                                            <input type="text" name="name[]" value="" class="form-control mb-3">
                                            <input type="file" name="images[]"  class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Oui</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3">
        <form action="{{route('demande.laisserpasser')}}" method="post" enctype="multipart/form-data" >
            @csrf
            @if(!$demandes->where('type_demande','laisser passer')->whereNull('isValidated')->count() > 0)
                <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModals" style="background-color: #1AA059; border:none">Laisser Passer</button>
            @endif
            <div class="modal fade" id="exampleModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vous voulez effectuer une demande de laisser passer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="row col-md-10 center">
                            <fieldset class="h3 ">Veuillez ajouter vos documents</fieldset>
                        <br><br>
                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label>Photo*</label>
                                    <input type="hidden" name="name[]" value="photo">
                                    <input type="file" name="images[]"  class="form-control">

                                </div>
                                 <div class="form-group col-md-12">
                                    <label>Photo signature*</label>
                                    <input type="hidden" name="name[]" value="photo signature">
                                    <input type="file" name="images[]"  class="form-control  ">

                                </div>
                                <div class="form-group col-md-12">
                                    <label>Piece d'identité*</label>
                                    <input type="hidden" name="name[]" value="piece d'identite">
                                    <input type="file" name="images[]"  class="form-control  ">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Motif de la demande*</label>
                                    <textarea name="motif_demande" id="" cols="100" rows="10" class="form-control  @error('motif_demande') is-invalid @enderror"></textarea>
                                    @error('motif_demande')<span class="text text-danger">{{$message}}</span>@enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for=""  data-toggle="collapse" href="#IconLeftCollapseOne">Autre +</label>
                                    <div id="IconLeftCollapseOne" class="card-body collapse ">
                                        <label for="">Type de fichier</label>
                                        <input type="text" name="name[]" value="" class="form-control mb-3">
                                        <input type="file" name="images[]"  class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Oui</button>
                    </div>
                </div>
                </div>
            </div>
        </form>
    </div>
</div>
        @if(session()->has('error'))
        <div id="casser" class="alert alert-danger col-md-12">{{session('error')}}</div>
        @endif
        @if(session()->has('success'))
        <div id="casser" class="alert alert-success col-md-12">{{session('success')}}</div>
        @endif
<div class="row">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Mes Demandes en cours de traitements</h5>
          <p class="card-text">{{$count_demande}}</p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Mes Demandes traitées</h5>
            <p class="card-text">{{$count_demandevalide }}</p>
          </div>
        </div>
      </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Mes Demandes validées</h5>
          <p class="card-text">{{$count_demandevalide}}</p>
        </div>
      </div>
    </div>
  </div>

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="card">
                <div class="card card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="sampleTable">
                            <thead>
                                <th>N°</th>
                                <th>Type Demande</th>
                                <th>Date Demande</th>
                                <th><i class="fa fa-folder-open"></i></th>
                                <th>Status</th>
                                <th>action</th>
                            </thead>
                            <tbody>
                                <?php $id = 1;?>
                            @foreach($demandes as $demande)
                                <tr>
                                    <td>{{$id++}}</td>
                                    <td>{{Str::upper($demande->type_demande) }}</td>
                                    <td>{{$demande->created_at}}</td>
                                    <td>
                                        <a href="{{route('demande.dossier',$demande->id)}}" class="btn btn-info btn-sm"><i class="fa fa-folder-open"></i></a>
                                    </td>
                                    @if($demande->isValidated == null)
                                        <td>En cours de traitement</td>
                                    @else
                                        <td>Demande traitée</td>
                                        <td>
                                            <a href="{{route('document.pdf',$demande->id)}}" class="btn btn-sm btn-default">Imprimer</a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
@if(session()->has('success'))
<div id="casser" class="alert alert-success col-12">{{session('success')}} </div>
@endif
<a href="{{route('completprofil')}}">
<button type="button"  class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal" style="background-color: rgb(238, 8, 8); border:none">Veuillez cliquer ici pour completer votre profil</button>
</a>
@endif
