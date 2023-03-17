@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="title">
            @if ($last_demande && $last_demande->isValidated != null)
                <p>Si vous voulez faire une demande veuillez choisir votre demande ci-dessous</p>
            @elseif($last_demande)
                <p class="text-warning">Votre demande est en cours traitement </p>
            @endif
        </div>
        @if(session()->has('error'))
            <div id="casser" class="alert alert-danger">{{session('error')}}</div>
        @endif
        @if(session()->has('success'))
        <div id="casser" class="alert alert-success">{{session('success')}}</div>
    @endif
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        @if($segment == 'attestations')
            <form action="{{route('demande.attestation')}}" method="post" enctype="multipart/form-data" >
                @csrf
                @if (!$last_demande)
                    <button type="button"  class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="background-color: #1AA059; border:none">Attestation</button>
                @elseif($last_demande->isAccepted !== null)
                    <button type="button"  class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="background-color: #1AA059; border:none">Attestation</button>
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
                                                <input type="file" name="images[]" class="form-control  ">
                                            </div>
                                             <div class="form-group col-md-12">
                                                <label>Photo signature*</label>
                                                <input type="hidden" name="name[]" value="photo signature">
                                                <input type="file" name="images[]"  class="form-control ">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Piece d'identité*</label>
                                                <input type="hidden" name="name[]" value="piece d'identite">
                                                <input type="file" name="images[]"  class="form-control">
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
        @endif
    </div>
    <div class="col-md-12">
        @if($segment == 'carte')
            <form action="{{route('demande.carte')}}" method="post" enctype="multipart/form-data" >
                @csrf
                @if(!$last_demande)
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalss" style="background-color: #1AA059; border:none">Carte</button>
                @elseif($last_demande->isAccepted !== null)
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalss" style="background-color: #1AA059; border:none">Carte</button>
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
                                        <input type="file" name="images"  class="form-control ">
                                    </div>
                                     <div class="form-group col-md-12">
                                        <label>Photo signature*</label>
                                        <input type="hidden" name="name[]" value="photo signature">
                                        <input type="file" name="image_signature"  class="form-control ">

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
        @endif
    </div>
    <div class="col-md-12">
        @if($segment == 'laisser-passer')
            <form action="{{route('demande.laisserpasser')}}" method="post" enctype="multipart/form-data" >
                @csrf
                @if(!$last_demande)
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="background-color: #1AA059; border:none">Laisser Passer</button>
                @elseif($last_demande->isAccepted !== null)
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="background-color: #1AA059; border:none">Laisser Passer</button>
                @endif
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <input type="file" name="images[]"  class="form-control ">
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
                                        <input type="file" name="images[]"  class="form-control  ">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Motif de la demande*</label>
                                        <textarea name="modif_demande" id="" cols="100" rows="10" class="form-control  @error('motif_demande') is-invalid @enderror"></textarea>
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
        @endif
    </div>
    <br>
        <div class="col-md-12">
            <div class="title">
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
                                    <th>Paiement</th>
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
                                        @if($demande->isAccepted == null)
                                            <td>En cours de traitement</td>
                                            <td> <a href="{{route('paiement.form', $demande->id)}}" class="btn btn-sm btn-default">Payer</a></td>
                                        @else
                                            <td>Demande traitée</td>
                                            <td></td>
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
@endsection
