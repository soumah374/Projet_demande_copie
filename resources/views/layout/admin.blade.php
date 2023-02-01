<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Constro - Construction Business HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Nom Entreprise</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- bootstrap -->
<link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

<!-- mega menu -->
<link href="{{asset('front/css/mega-menu/mega_menu.css')}}" rel="stylesheet" type="text/css" />

<!-- font-awesome -->
<link href="{{asset('front/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Skills -->
<link href="{{asset('front/css/skills-graph/jqbar.css')}}" rel="stylesheet" type="text/css" />

<!-- Flaticon -->
<link href="{{asset('front/css/flaticon.css')}}" rel="stylesheet" type="text/css" />

<!-- owl-carousel -->
<link href="{{asset('front/css/owl-carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css" />

<!-- revolution -->
<link href="{{asset('front/revolution/css/settings.css')}}" rel="stylesheet" type="text/css">

<!-- General style -->
<link href="{{asset('front/css/general.css')}}" rel="stylesheet" type="text/css" />

<!-- main style -->
<link href="{{asset('front/css/style.css')}}" rel="stylesheet" type="text/css" />

<!-- Style customizer -->
<link rel="stylesheet" type="text/css" href="#" data-style="styles" />
<link rel="stylesheet" type="text/css" href="{{asset('front/css/style-customizer.css')}}" />

</head>

<body>

<header id="header" class="dark">

<div class="topbar">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="topbar-left text-start">
				   <ul class="list-inline">
              <li class="list-inline-item" style="color:white"> <i class="fa fa-envelope-o" style="color:white"> </i> contact@waqfbidguinee.org.gn</li>
          </ul>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="topbar-right text-end">
          <ul class="list-inline">
              <li class="list-inline-item" style="color:white"> <i class="fa fa-phone" style="color:white"></i> (224) 624 36 36 36</li>
              <li class="list-inline-item" style="color:white"><a href="#"><i class="fa fa-facebook" style="color:white"></i></a></li>
              <li class="list-inline-item" style="color:white"><a href="#"><i class="fa fa-twitter" style="color:white"></i></a></li>
              <li class="list-inline-item" style="color:white"><a href="#"><i class="fa fa-instagram" style="color:white"></i></a></li>
              <li class="list-inline-item" style="color:white"><a href="#"><i class="fa fa-youtube-play" style="color:white"></i></a></li>
          </ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--=================================
 mega menu -->

<div class="menu">
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container">
      <div class="row">
       <div class="col-lg-12 col-md-12 position-relative">
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <a href="index-default.html"><img id="logo_img" src="images/logo-light.png" alt="logo"> </a>
            </li>
        </ul>
        <!-- menu links -->
        <ul class="menu-links">
            <!-- active class -->
            <li><a href="">Accueil</a></li>
            <li><a href="javascript:void(0)"> Présentation <i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel left-menu">
                    <li><a href="index-default.html">A propos</a></li>
                    <li><a href="index-2.html">Genese du WAQF</a></li>
                    <li><a href="index-3.html">Contributions de l’Etat Guinéen et de la Bid</a></li>
                    <li><a href="index-4.html">Mission et Vision</a></li>
                    <li><a href="index-5.html">Objectifs </a></li>
                    <li><a href="">Administration </a></li>
                    <li><a href="">Organigramme</a></li>
                </ul>
            </li>
            <li><a href="">Activités</a></li>
            <li><a href="">Patrimoines</a></li>
            <li><a href="javascript:void(0)"> Nos projets <i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel left-menu">
                    <li><a href="services-1.html"> Infrastructures et Equipements Scolaires</a></li>
                    <li><a href="services-2.html"> Bourses d’Etudes et Assistance pour la Formation</a></li>
                    <li><a href="services-3.html"> Equipements et Matériels pour les Université et centres de Formation Professionnelle</a></li>
                    <li><a href="construction.html">Développement Institutionnel</a></li>
                 </ul>
            </li>
            <li><a href="">Actualités</a></li>
            <li><a href="javascript:void(0)"> Bourse <i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel left-menu">
                    <li><a href="{{route('front.bourseDoctorat')}}"> Doctorat</a></li>
                    <li><a href="{{route('front.ETP')}}"> Enseignement Technique et Professionnel</a></li>
                    <li><a href="{{route('front.ES')}}"> Enseignement Supérieur</a></li>
                 </ul>
            </li>
            <li><a href="">Contact</a></li>
            <li><a href="{{route('login')}}">Connexion</a></li>
        </ul>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>

<!--=================================
 header -->

@yield('contenu')


<!--=================================
footer -->

<footer class="footer  page-section-pt pb-0">
   <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
       <div class="footer-about">
         <span class="mb-20 d-block"><img id="logo-footer" class="img-fluid" src="images/logo-light.png" width="180" alt="logo"></span>
         <p>
            Le WAQF BID-GUINEE est une Institution caritative à caractère éducatif créée lors de la réunion des Gouverneurs de la Banque Islamique de Développement tenue à Conakry en 1996. Suite à cela, il fut promulgué la loi L 97/037/AN du 25 novembre 1997 fixant les règles relatives à l’organisation, la fructification, la gestion et la maintenance des biens WAQF, ainsi qu’à l’affectation de leurs revenus.
         </p>
       </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
       <div class="footer-link">
         <div class="section-title"><h4 class="title">Nos liens</h4></div>
          <ul class="list-mark">
            <li><a style="color:#fff;font-weight: bold" href="index-default.html">Accueil</a></li>
            <li><a style="color:#fff;font-weight: bold" href="about-1.html">Presentation</a></li>
            <li><a style="color:#fff;font-weight: bold" href="services-1.html">Activités</a></li>
            <li><a style="color:#fff;font-weight: bold" href="team-1.html">Actualités</a></li>
            <li><a style="color:#fff;font-weight: bold" href="blog-left.html">Patrimoines</a></li>
            <li><a style="color:#fff;font-weight: bold" href="portfolio-3-columns.html">Nos projets</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
       <div class="footer-link">
         <div class="section-title"><h4 class="title">Autres liens</h4></div>
          <ul class="list-mark">
            <li><a style="color:#fff;font-weight: bold" href="index-default.html">Accueil</a></li>
            <li><a style="color:#fff;font-weight: bold" href="about-1.html">Presentation</a></li>
            <li><a style="color:#fff;font-weight: bold" href="services-1.html">Activités</a></li>
            <li><a style="color:#fff;font-weight: bold" href="team-1.html">Actualités</a></li>
            <li><a style="color:#fff;font-weight: bold" href="blog-left.html">Patrimoines</a></li>
            <li><a style="color:#fff;font-weight: bold" href="portfolio-3-columns.html">Nos projets</a></li>
          </ul>
        </div>
      </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
         <div class="footer-address">
           <div class="section-title"><h4 class="title">Contact</h4></div>
           <ul class="list-inline">
             <li ><i class="fa fa-map-marker" style="color:#fff"></i> <span style="color:#fff">1234 North Avenue Luke Lane</span></li>
             <li><i class="fa fa-phone" style="color:#fff"></i> <span style="color:#fff">+0123 456 789</span></li>
             <li><i class="fa fa-fax" style="color:#fff"></i> <span style="color:#fff">+0123 456 789</span></li>
             <li><i class="fa fa-envelope" style="color:#fff"></i> <span style="color:#fff">support@website.com</span></li>
           </ul>
        </div>
      </div>
    </div>
   </div>

   <div class="footer-widget mt-50">
      <div class="container"><div class="row">
         <div class="col-lg-6 col-md-6">
           <p> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Constro </a> All Rights Reserved </p>
         </div>
         <div class="col-lg-6 col-md-6">
           <ul class="text-center text-md-end ps-0">
             <li><a href="terms-conditions.html">Terms of Use</a></li>
             <li><a href="privacy-policy.html">Privacy Policy</a></li>
             <li><a href="contact-1.html">Contact Us</a></li>
           </ul>
         </div>
       </div>
      </div>
    </div>
 </footer>


<!--=================================
footer -->


<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-chevron-up"></i></a></div>

<!--=================================
 jquery -->


<!-- jquery  -->
<script type="text/javascript" src="{{asset('front/js/jquery-3.6.0.min.js')}}"></script>

<!-- popper.min -->
<script type="text/javascript" src="{{asset('front/js/popper.min.js')}}"></script>

<!-- bootstrap -->
<script type="text/javascript" src="{{asset('front/js/bootstrap.min.js')}}"></script>

<!-- appear -->
<script type="text/javascript" src="{{asset('front/js/jquery.appear.js')}}"></script>

<!-- Menu -->
<script type="text/javascript" src="{{asset('front/js/mega-menu/mega_menu.js')}}"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="{{asset('front/js/owl-carousel/owl.carousel.min.js')}}"></script>

<!-- counter -->
<script type="text/javascript" src="{{asset('front/js/counter/jquery.countTo.js')}}"></script>

<!-- skills -->
<script type="text/javascript" src="{{asset('front/js/skills-graph/jqbar.js')}}"></script>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{asset('front/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

<!-- style customizer  -->
<script type="text/javascript" src="{{asset('front/js/style-customizer.js')}}"></script>

<!-- custom -->
<script type="text/javascript" src="{{asset('front/js/custom.js')}}"></script>

<script type="text/javascript">
  (function($){
  "use strict";

   var tpj=jQuery;
			var revapi12;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_12_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_12_1");
				}else{
					revapi12 = tpj("#rev_slider_12_1").show().revolution({
						sliderType:"standard",
						sliderLayout:"fullwidth",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
                             mouseScrollReverse:"default",
							onHoverStop:"off",
							arrows: {
								style:"hermes",
								enable:true,
								hide_onmobile:false,
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								tmp:'<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder"></div>	</div>',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:20,
                                    v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:20,
                                    v_offset:0
								}
							}
						},
						visibilityLevels:[1240,1024,778,480],
						gridwidth:1920,
						gridheight:860,
						lazyType:"none",
						shadow:0,
						spinner:"spinner3",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});
    })(jQuery);
		</script>
</body>
</html>

