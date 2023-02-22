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
            <div class="alert alert-danger">{{session('error')}}</div>
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
                @elseif($last_demande->isValidated !== null)
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
                @elseif($last_demande->isValidated !== null)
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
                                            @if($demande->isValidated == null)
                                                <td>En cours de traitement</td>
                                            @else
                                                <td>Demande traitée</td>
                                                <td>
                                                   <a href="{{route('document.attestation.pdf')}}" class="btn btn-sm btn-default">Imprimer</a>
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
