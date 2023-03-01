<!DOCTYPE html>
<style>
    body{
        margin:-10px;
        padding:-10px;

    }
    h1{
        text-align: center;
    }
    .directeur{
        text-align: center;
    }
    .patro{
        font-style: bold;
    }
    .contenu{
        padding: 20px;
    }
    .general{
        margin-top: 400px;
    }
    @page { margin: 0.5cm; }

</style>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <div class="contenu">
    <h1>{{Str::upper( $demande->type_demande)}}</h1>
    <h1>{{Str::upper($date)}}</h1>
        <p>Nous Nom Entreprise </p>
        <p><strong>NOM :</strong> {{$users->name}}</p>
        <p><strong>PRENOM :</strong> {{$users->prenom}}</p>
        <p><strong>DATE DE NAISSANCE :</strong> {{$demande->demandeur->date_naissance}}</p>
        <p><strong>LIEU DE NAISSANCE :</strong> {{$demande->demandeur->lieu_naissance}}</p>
        <br><br><br>
        <p>En foi de quoi, nous lui délivrons la présente attestation pour servir et valoir de ce que de droit</p>
        <p class="lieu"> Fait le {{ $demande->validated_at }} à Conakry</p>
        <h1 class="general">DIRECTEUR GENERAL</h1>
         <p class="directeur">Photo signature</p>
         <h1 style="text-decoration: underline">NOM PRENOM DIRECTEUR</h1>
   </div>

</body>
</html>
