<!doctype html>
<html lang="fr">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
        <!-- IcoFont Min CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/icofont.min.css')}}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/animate.min.css')}}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.min.css')}}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/magnific-popup.min.css')}}">
        <!-- Owl Theme Default CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/owl.theme.default.min.css')}}">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/odometer.min.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/responsive.css')}}">
        <!-- Dark Style CSS -->
        <link rel="stylesheet" href="{{asset('front/assets/css/dark-style.css')}}">
        <link href="{{asset('front/revolution/css/settings.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('preloader/preloader.css')}}">

        <link rel="stylesheet" href="{{asset('front/assets/css/flaticon.css')}}">
        @toastr_css
        <title>Nom Entreprise</title>

    </head>
    <body>
    <div class="preloader" id="preloader">
        <div class="preloader"></div>
    </div>
    @include('layout.menu_front')
    @yield('contenu')
    @include('layout.footer_front')
