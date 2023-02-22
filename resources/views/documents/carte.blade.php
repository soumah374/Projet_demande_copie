<!DOCTYPE html>
<style>
    body{
        border:50px double black ;
        margin:-10px;
        padding:-10px;
    }
    h1{
        text-align: center;
    }
    .contenu{
        padding: 20px;
        background-position-y: center;
    }

</style>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <div class="contenu">
    <h1>{{Str::upper( $demande->type_demande)}}</h1>
   </div>

</body>
</html>
