@extends('layout.app')
@section('content')
<div class="container pt-3">
    <div class="row">
        <div class="col-0">
            @if($segment == 'attestations')
                <form action="{{route('soumettredemande')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <button type="submit" class="btn btn-success" style="background-color: #1AA059; border:none">Attestation</button>
                </form>
            @endif
        </div>
        <div class="col-4">
            @if($segment == 'laisser-passer')
                <form action="{{route('soumettredemande')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <button type="submit" class="btn btn-success" style="background-color: #1AA059; border:none">Laisser Passer</button>
                </form>
            @endif
        </div>
    </div>
    <br>
    <div class="row ">
    <div class="col-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Les Demande en cours</h3>
                    </div>
                </div>
            </div>
    <table class="table table-striped table-bordered" id="sampleTable">
    <thead>
       
        <tr>
            <th>N°</th>
            <th>Type Demande</th>
            <th>Date Demande</th>
            <th>Status</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td></td>
            </tr>

    </tbody>
    </table>
    </div>
@endsection
