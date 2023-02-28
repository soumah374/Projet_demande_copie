<!DOCTYPE html>
</html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<style>
    body{
        margin:-10px;
        padding:-10px;
    }
    h1{
        text-align: center;
    }
    .cadre{
        display: grid;
    }

</style>
<body>
   <div class="contenu">
    <h1>{{Str::upper( $demande->type_demande)}}</h1>
   </div>
            <div class="cadre">
                   @foreach ($pic as $pics)
                    <img src="{{$pics}}" width="150px;" height="150px;">
                  <br><br>
                   @endforeach
                <div class="info">
                    <p><strong>NOM :</strong> {{$users->name}}</p>
                    <p><strong>PRENOM :</strong> {{$users->prenom}}</p>
                    <p><strong>DATE DE NAISSANCE :</strong> {{$demande->demandeur->date_naissance}}</p>
                    <p><strong>LIEU DE NAISSANCE :</strong> {{$demande->demandeur->lieu_naissance}}</p>
                    <p><strong>SEXE :</strong> {{$demande->demandeur->genre}}</p>
                    <p><strong>ADRESSE :</strong> {{$demande->demandeur->adresse}}</p>
                    <p><strong>TAILLE :</strong> {{$demande->demandeur->taille}}</p>
                </div>
            </div>
</body>
</html>
