
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    @toastr_css
    <link rel="stylesheet" href="{{asset('preloader/preloader.css')}}">
    <title>Nom Entreprise</title>
    <link rel="icon" type="image/png" href="{{asset('img/front/favicon-1.png')}}">
  </head>
  <body>
  <div class="preloader" id="preloader">
    <div class="preloader"></div>
</div>
    <section class="material-half-bg">
      <div class="cover" style="background: #078a36"></div>
    </section>
    <section class="login-content" >
      <div class="logo">
        <h1>Nom Entreprise</h1>
      </div>
      <div class="login-boxn" >
        <form  class="login-form" action="#"  method="POST">
            @csrf
          <h3 class="login-head">INSCRIPTION</h3>
          <div class="form-group">
            <label class="control-label">NOM</label>
            <input class="form-control" type="text" name="name" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PRENOM</label>
            <input class="form-control" type="text" name="prenom" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="email" name="email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">MOT DE PASSE</label>
            <input class="form-control" type="password" name="password">
          </div>
          <div class="form-group">
            <label class="control-label">CONFIRME MOT DE PASSE</label>
            <input class="form-control" type="password" name="password">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" style="background: #078a36"><i class="fa fa-sign-in fa-lg fa-fw"></i>Inscription</button>
          </div>
          <br>
          <p><a href="{{route('login')}}" style="margin-left:80px;">CONNECTEZ-VOUS</a></p>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
    <script src="{{asset('front/assets/js/jquery.min.js')}}"></script>
	  <script type="text/javascript" src="{{asset('preloader/preloader.js')}}"></script>
    @toastr_js
    @toastr_render
  </body>

</html>
