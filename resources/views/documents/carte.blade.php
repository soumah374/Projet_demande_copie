<!DOCTYPE html>
</html lang="en">
<head>
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
       .activity-container {
        display: flex;
        justify-content: flex-end;
      }
      .activity-text {
        text-align: center;
        text-align : left;
      }

      .photo {
        width: 275px;
        height: 250px;
        border-radius: 10%;
        float: left;
        margin-right: 100px;
      }
      .logo{
        width : auto;
        height : 40px;
        border-radius: 1%;
        margin-bottom : 20px;
        background-color:rgba(9, 9, 240, 0.5);
      }
      h1{
        text-align: center;
        margin-bottom : 100px
    }
    .general{
       margin-top : 400px;
    }

       @page { margin: 0.5cm; }
        </style>
</head>
<body>
    <div class="logo">
      </div>
    <div class="contenu">
        <h1>{{Str::upper( $demande->type_demande)}}</h1>
       </div>
   <div class="activity-container">
                     <div class="photo">
                        @foreach ($pic as $pics)
                        <img src="{{$pics}}" alt="ma photo" width="300;" heigth="250;"/>
                        @endforeach
                        <p><strong>DATE DE DELIVRANCE :</strong> {{$demande->validated_at}}</p>
                        <p><strong>DATE D'EXPIRATION :</strong> {{date('Y-m-d', strtotime($demande->validated_at. ' + 2 years'));}}</p>
                    </div>
      <div class="activity-text">
                    <p><strong>NOM :</strong> {{$users->name}}</p>
                    <p><strong>PRENOM :</strong> {{$users->prenom}}</p>
                    <p><strong>DATE DE NAISSANCE :</strong> {{$demande->demandeur->date_naissance}}</p>
                    <p><strong>LIEU DE NAISSANCE :</strong> {{$demande->demandeur->lieu_naissance}}</p>
                    <p><strong>SEXE :</strong> {{$demande->demandeur->genre}}</p>
                    <p><strong>ADRESSE :</strong> {{$demande->demandeur->adresse}}</p>
                    <p><strong>TAILLE :</strong> {{$demande->demandeur->taille}}</p>
      </div>
    </div>
    <div class="general">
        <p style="text-align:center;">Signature et cachet du directeur générel</p>
    </div>
</body>
</html>
