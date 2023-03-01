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
        width: 250px;
        height: 200px;
        border-radius: 10%;
        float: right;
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
    .generale{
       margin-top : 330px;
    }

    .directeur{
        text-align: center;
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
                        <img src="{{$pic[0]}}" alt="ma photo" width="300;" heigth="250;"/>
                        <img src="{{$pic[1]}}" alt="ma photo" width="300;" heigth="200;"/>
                        <p><strong>DELIVRANCE LE :</strong> {{$demande->validated_at}}</p>
                        <p>Durée du laisser-passer 90 jours</p>
                    </div>
      <div class="activity-text">
                    <p><strong>NOM :</strong> {{$users->name}}</p>
                    <p><strong>PRENOM :</strong> {{$users->prenom}}</p>
                    <p><strong>DATE DE NAISSANCE :</strong> {{$demande->demandeur->date_naissance}}</p>
                    <p><strong>LIEU DE NAISSANCE :</strong> {{$demande->demandeur->lieu_naissance}}</p>
                    <p><strong>NOM PERE :</strong> {{$demande->demandeur->nom_pere}}</p>
                    <p><strong>ADRESSE :</strong> {{$demande->demandeur->adresse}}</p>
                    <p><strong>NOM MERE :</strong> {{$demande->demandeur->nom_mere}}</p>
      </div>
    </div>
    <div class="generale">
        <h1 class="general">DIRECTEUR GENERAL</h1>
         <p class="directeur">Photo signature</p>
         <h1 style="text-decoration: underline">NOM PRENOM DIRECTEUR</h1>
    </div>
</body>
</html>
