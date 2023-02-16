@extends('layout.app')
@section('content')
<div class="container pt-3">
    <div class="row">
        <div class="col-0">
            <form action="{{route('soumettredemande')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <button type="submit" class="btn btn-success" style="background-color: #1AA059; border:none">Attestation</button>
            </form>
        </div>
        <div class="col-4">
            <form action="{{route('soumettredemande')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <button type="submit" class="btn btn-success" style="background-color: #1AA059; border:none">Laisser Passer</button>
            </form>
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

    </tbody>
    </table>
    </div>
@endsection
