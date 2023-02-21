<!DOCTYPE html>
<style>
    body{
        border: 30px double black;
        margin: 0px;
        padding: 0px;
        display: flex;
    }
    h1{
        text-align: center;
    }
    .patro{
        font-style: bold;
    }
    .contenu{
        padding: 20px;
    }
    @media (orientation: landscape) {
    body {
    flex-direction: row;
    }
}
</style>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="contenu">
        <h1>{{Str::upper( $demande->type_demande)}}</h1>
    <p>Je soussigné(e) <span class="patro">{{$users->prenom}} {{$users->name}}</span>, né(e) le {{$demandeur->date_naissance}} à {{$demandeur->lieu_naissance}} ,
    fils de {{$demandeur->nom_pere}} et de {{$demandeur->nom_mere}}
    votre demande {{$demande->type_demande}} vous appartient</p>
    <p> Fait le {{ $date }} à Conakry</p>
    </div>

</body>
