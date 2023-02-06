<!-- Loopple Templates: https://www.loopple.com/templates | Copyright Loopple (https://www.loopple.com) | This copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Profile Dashboard</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link rel="stylesheet" href="https://rawcdn.githack.com/Loopple/loopple-public-assets/ad60f16c8a16d1dcad75e176c00d7f9e69320cd4/argon-dashboard/css/nucleo/css/nucleo.css">
        <link rel="stylesheet" href="{{asset('theme.css')}}">
        <link rel="stylesheet" href="{{asset('loopple.css')}}">
    </head>

    <body>
        <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white loopple-fixed-start" id="sidenav-main">
            <div class="navbar-inner">
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:">
                                <i class="fa fa-desktop text-primary"></i>
                                <span class="nav-link-text">Tableau de bord</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" href="javascript:">
                                <i class="fa fa-folder text-danger"></i>
                                <span class="nav-link-text">Mes Demandes</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="main-content" id="panel">
            <nav class="navbar navbar-top navbar-expand navbar-dark border-bottom " id="navbarTop" style="background-color: #078a36" >
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center  ml-md-auto ">
                            <li class="nav-item d-xl-none">
                                <div class="pr-3 sidenav-toggler sidenav-toggler-dark active" data-action="sidenav-pin" data-target="#sidenav-main">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item d-sm-none">
                                <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                    <i class="ni ni-zoom-split-in"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                            <li class="nav-item dropdown">
                                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="media align-items-center">
                                        <span class="avatar avatar-sm rounded-circle">
                                            <img alt="Image placeholder" src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg">
                                        </span>
                                        <div class="media-body  ml-2  d-none d-lg-block">
                                            <span class="mb-0 text-sm  font-weight-bold">{{Auth::user()->prenom }} {{Auth::user()->name}}</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu  dropdown-menu-right ">
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome!</h6>
                                    </div>
                                    <a href="" class="dropdown-item">
                                        <i class="fa fa-user"></i>
                                        <span>My profile</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{route('logout')}}" class="dropdown-item">
                                        <i class="fa fa-sign-out-alt"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid pt-3">
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Faire une demande</button>
                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Formulaire de demande</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('create_demande',Auth::user()->id)}}" method="post" >
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Nom*</label>
                                                        <input type="text" value="{{Auth::user()->name}}" readonly name="name" class="form-control  @error('name') is-invalid @enderror" >
                                                        @error('name')<span class="text text-danger">{{$message}}</span>@enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Prenom*</label>
                                                        <input type="text" value="{{Auth::user()->prenom}}" readonly name="prenom" class="form-control  @error('prenom') is-invalid @enderror">
                                                        @error('prenom')<span class="text text-danger">{{$message}}</span>@enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Nom Père*</label>
                                                        <input type="text" value="" name="name_pere" class="form-control  @error('name_pere') is-invalid @enderror">
                                                        @error('name_pere')<span class="text text-danger">{{$message}}</span>@enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Nom Mere*</label>
                                                        <input type="text" value="" name="name_mere" class="form-control  @error('name_mere') is-invalid @enderror">
                                                        @error('name_mere')<span class="text text-danger">{{$message}}</span>@enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Email*</label>
                                                        <input type="email" value="{{Auth::user()->email}}" readonly name="email" class="form-control  @error('email') is-invalid @enderror">
                                                        @error('email')<span class="text text-danger">{{$message}}</span>@enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Date de Naissance*</label>
                                                        <input type="text" value="" name="date_naissance" class="form-control  @error('date_naissance') is-invalid @enderror">
                                                        @error('date_naissance')<span class="text text-danger">{{$message}}</span>@enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Lieu Naissance*</label>
                                                        <input type="text" value="" name="lieu_naissance" class="form-control  @error('lieu_naissance') is-invalid @enderror">
                                                        @error('lieu_naissance')<span class="text text-danger">{{$message}}</span>@enderror
                                                    </div>
                                                    <div class="from-group col-md-6">
                                                        <label for="genre">Genre*</label>
                                                        <select class="form-control" name="genre" id="genre">
                                                            <option value="masculin">Masculin</option>
                                                            <option value="feminin">Feminin</option>
                                                        </select>
                                                    </div>
                                                    <div class="from-group col-md-12">
                                                        <label for="type_demande">Type de demande</label>
                                                        <select class="form-control" name="type_demande" id="type_demande">
                                                            <option value="laisser-passer">Laisser passer</option>
                                                            <option value="atestation">Atestation</option>
                                                            <option value="carte">Carte</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Photo*</label>
                                                        <input type="file" value="" name="images" class="form-control @error('image') is-invalid @enderror">
                                                        @error('images')<span class="text text-danger">{{$message}}</span>@enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Photo Signature*</label>
                                                        <input type="file" value="" name="image_signature" class="form-control @error('image_signature') is-invalid @enderror">
                                                        @error('image_signature')<span class="text text-danger">{{$message}}</span>@enderror
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row m-5">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="mb-0">Les Demande en cours</h3>
                                    </div>
                                    <div class="col text-right">
                                        <a href="#!" class="btn btn-sm btn-primary">See all</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Type Demande</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                Facebook
                                            </th>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-2">60%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                Facebook
                                            </th>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-2">70%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                Google
                                            </th>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-2">80%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                Instagram
                                            </th>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-2">75%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                twitter
                                            </th>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="mr-2">30%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
        </div>
        <script src="{{asset('loopple.js')}}"></script>
        <script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/jquery.min.js"></script>
        <script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/js.cookie.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/chart.extension.js"></script>
        <script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/7bb803d2af2ab6d71d429b0cb459c24a4cd0fbb4/argon-dashboard/js/argon.min.js"></script>
    </body>
</html>

