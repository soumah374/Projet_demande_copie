@extends('app')
    <style>
        .user-profile .brief-info {
    overflow: hidden;
    background: #fff;
    padding: 15px 15px 0px;
    border: 1px solid #e6e6e6;
    border-radius: 3px;
}
.user-profile .brief-info .media{
    margin-bottom: 10px;
}
.user-profile .brief-info img {

    max-width: 20%;
    border-radius: 50%;
    border:2px solid #ddd;
}
.user-profile .brief-info p {
    margin-bottom: 5px;
    margin-top: 5px;
}
.user-profile .brief-info p i {
    margin-right: 10px;
    color: #e54c2a;
}
.user-profile .user-personal-info,
.user-profile .user-change-password,
.user-profile .card-entry,
.user-profile .user-add-card {
    overflow: hidden;
    background: #fff;
    border: 1px solid #e6e6e6;
    border-radius: 3px;
}

.user-profile .user-info-body,
.user-profile .change-password-body {
    padding: 20px 15px;
    overflow: hidden;
}
.user-profile .user-personal-info .upload-pic {
    height: 30px;
}
.user-profile .user-personal-info textarea {
    height: auto !important;
    resize: none;
}
.titre{
    font-weight:bold;
    text-align:center;
    margin:10px;
}
.input{
    background-color:#fff;
}
    </style>
    @section('content')
    <div class="container  user-profile">
        <div id="overview" class="tab-pane fade active show" style="margin-top:10px">
            <div class="row">
                <div class="col-lg-6">
                    <div class="brief-info">
                        <div class="media">
                            <img class="mr-3" src="{{asset('img/avatar/'.$UsersInfos->avatar)}}" alt="{{$UsersInfos->nom}}">
                            <div class="media-body">
                                <h4>{{$UsersInfos->nom}}</h4>
                                <p><i class="fa fa-envelope"></i> {{$UsersInfos->email}}</p>
                                <p><i class="fa fa-phone"></i> {{$UsersInfos->telephone}}</p>
                                <p><i class="fa fa-map"></i> {{$UsersInfos->adresse}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="ro" style="margin-top:10px">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="user-personal-info">
                        <h5 class="titre">Modification mes informations</h5>
                        <div class="user-info-body">
                            <form action="{{url('update')}}" method="POST">
                                {{@csrf_field()}}
                                {{ method_field('PUT') }}
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="">Prénom et Nom</label>
                                        <input name="nom" required="" placeholder="{{$UsersInfos->nom}}" class="form-control input" type="text">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="">Email</label>
                                        <input name="email" required="" placeholder="{{$UsersInfos->email}}" class="form-control input" type="text">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="">Numéro De Téléphone</label>
                                        <input name="telephone" required="" placeholder="{{$UsersInfos->telephone}}" class="form-control input" type="text">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <button>Modifier</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
