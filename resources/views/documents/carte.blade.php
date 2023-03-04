<!DOCTYPE html>
</html lang="en">
<head>
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>


       @page {
         size: 9.4cm 9cm;
         margin: 5; 
    }
    .activity-container{
        display: flex;
        justify-content: flex-end;
      }
      .activity-text {
        text-align: center;
        text-align : left;
      }

      .photo {
        width: 60px;
        height: 200px;
        border-radius: 10%;
        float: left;
        margin-right: 100px;
      }

      .photo img{
        width: 80px;
        height: 80px;
        border-radius: 1%;
      }

      .photo .signature{
        width: 90px;
        height: 30px;
      }
 
      .contenu{
        text-align: center;
    }
    .general{
       margin-top : 40px;
    }
        span{
            font-size: 8px;
            font-style: bold;
        }
        p{
            font-size: 8px;
        }
        </style>
</head>
<body>
    <div class="contenu">
        <h5>{{Str::upper( $demande->type_demande)}}</h5>
       </div>
   <div class="activity-container">
                     <div class="photo">
                        <img src="{{$pic[0]}}" alt="ma photo" width="80;" heigth="80;"/>
                        <p>Signature du titulaire</p>
                        <img src="{{$pic[1]}}" alt="ma photo signature" width="50;" heigth="30;" class="signature"/>
                        <p><span>DELIVRE :</span> {{$demande->validated_at}}</p>
                        <p><span>EXPIRE :</span> {{date('Y-m-d', strtotime($demande->validated_at. ' + 2 years'));}}</p>
                    </div>
      <div class="activity-text">
                    <p><span>NOM :</span> {{$users->name}}</p>
                    <p><span>PRENOM :</span> {{$users->prenom}}</p>
                    <p><span>DATE DE NAISSANCE :</span> {{$demande->demandeur->date_naissance}}</p>
                    <p><span>LIEU DE NAISSANCE :</span> {{$demande->demandeur->lieu_naissance}}</p>
                    <p><span>SEXE :</span> {{$demande->demandeur->genre}}</p>
                    <p><span>ADRESSE :</span> {{$demande->demandeur->adresse}}</p>
                    <p><span>TAILLE :</span> {{$demande->demandeur->taille}}</p>
      </div>
    </div>
    <div class="general">
        <p style="text-align:center;">Signature et cachet du directeur générel</p>
    </div>
</body>
</html>
