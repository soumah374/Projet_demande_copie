(function($){
	"use strict";

    // Header Sticky
    $(window).on('scroll',function() {
        if ($(this).scrollTop() > 120){  
            $('.navbar-light').addClass("is-sticky");
        }
        else{
            $('.navbar-light').removeClass("is-sticky");
        }
    });
    
    // Home Slides
    $('.home-slides').owlCarousel({
        items: 1,
        thumbs: true,
        dots: false,
        touchDrag: false,
        mouseDrag: false,
        smartSpeed: 1000,
        thumbsPrerendered: true,
        autoplay: true,
        loop: true,
        nav: true,
        navText: [
            "<i class='icofont-rounded-left'></i>",
            "<i class='icofont-rounded-right'></i>"
        ]
    });
    $('.homepage-slides').owlCarousel({
        items: 1,
        thumbs: true,
        dots: false,
        touchDrag: false,
        mouseDrag: false,
        smartSpeed: 1000,
        thumbsPrerendered: true,
        autoplay: true,
        loop: true,
        nav: false,
        navText: [
            "<i class='icofont-rounded-left'></i>",
            "<i class='icofont-rounded-right'></i>"
        ]
    });
    $(".home-slides").on("translate.owl.carousel", function(){
        $(".home-slides .banner-image").removeClass("animate__animated animate__fadeInDown").css("opacity", "0");
        $(".home-slides h1").removeClass("animate__animated animate__fadeInUp").css("opacity", "0");
        $(".home-slides p").removeClass("animate__animated animate__zoomIn").css("opacity", "0");
        $(".home-slides .btn").removeClass("animate__animated animate__fadeInDown").css("opacity", "0");
        $(".home-slides .video-btn").removeClass("animate__animated animate__fadeInDown").css("opacity", "0");
    });
    $(".home-slides").on("translated.owl.carousel", function(){
        $(".home-slides .banner-image").addClass("animate__animated animate__fadeInDown").css("opacity", "1");
        $(".home-slides h1").addClass("animate__animated animate__fadeInUp").css("opacity", "1");
        $(".home-slides p").addClass("animate__animated animate__zoomIn").css("opacity", "1");
        $(".home-slides .btn").addClass("animate__animated animate__fadeInDown").css("opacity", "1");
        $(".home-slides .video-btn").addClass("animate__animated animate__fadeInDown").css("opacity", "1");
    });
    
    // Pricing Tabs
    $(".tab-slider-body").hide();
    $(".tab-slider-body:first").show();
    $(".tab-slider-nav li").on('click', function() {
        $(".tab-slider-body").hide();
        var activeTab = $(this).attr("rel");
        $("#"+activeTab).fadeIn();
        if($(this).attr("rel") == "yearly"){
            $('.tab-slider-tabs').addClass('slide');
        }else{
            $('.tab-slider-tabs').removeClass('slide');
        }
        $(".tab-slider-nav li").removeClass("active");
        $(this).addClass("active");
    });
    
    // FAQ Accordion
    $(function() {
        $('.accordion').find('.accordion-title').on('click', function(){
            // Adds Active Class
            $(this).toggleClass('active');
            // Expand or Collapse This Panel
            $(this).next().slideToggle('fast');
            // Hide The Other Panels
            $('.accordion-content').not($(this).next()).slideUp('fast');
            // Removes Active Class From Other Titles
            $('.accordion-title').not($(this)).removeClass('active');		
        });
    });
    
    // Shorting
    try {
        var mixer = mixitup('.shorting', {
            controls: {
                toggleDefault: 'none'
            }
        });
    } catch (err) {}
    
    // Popup Gallery
    $('.popup-btn').magnificPopup({
        type: 'image',
        gallery:{
            enabled:true
        }
    });
    
    // Popup Video
    $('.video-btn').magnificPopup({
        disableOn: 320,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
    
    // Feedback Slides
    $('.feedback-slides').owlCarousel({
        loop: true,
        autoplay: true,
        nav: false,
        mouseDrag: true,
        autoplayHoverPause: true,
        responsiveClass: true,
        dots: true,
        margin: 30,
        navText: [
            "<i class='icofont-double-left'></i>",
            "<i class='icofont-double-right'></i>"
        ],
        responsive:{
            0:{
                items:1,
            },
            768:{
                items:2,
            },
            1200:{
                items:3,
            }
        }
    });

    // Repair Banner Content Slides
    $('.repair-content-slides').owlCarousel({
        loop: false,
        autoplay: true,
        nav: false,
        items: 1,
        mouseDrag: true,
        autoplayHoverPause: true,
        responsiveClass: true,
        dots: true,
        navText: [
        "<i class='icofont-double-left'></i>",
        "<i class='icofont-double-right'></i>"
        ],
    });

    // Repair Feedback Slides
    $('.repair-feedback-slides').owlCarousel({
        loop: true,
        autoplay: true,
        nav: false,
        mouseDrag: true,
        autoplayHoverPause: true,
        responsiveClass: true,
        dots: true,
        margin: 30,
        navText: [
        "<i class='icofont-double-left'></i>",
        "<i class='icofont-double-right'></i>"
        ],
        responsive:{
            0:{
                items:1,
            },
            768:{
                items:2,
            },
            1200:{
                items:2,
            }
        }
    });
    
    // Partner Slider
    $('.partner-slider').owlCarousel({
        loop: true,
        autoplay:true,
        nav: false,
        mouseDrag: true,
        autoplayHoverPause: true,
        responsiveClass: true,
        dots: true,
        margin: 30,
        navText: [
        "<i class='icofont-double-left'></i>",
        "<i class='icofont-double-right'></i>"
        ],
        responsive:{
            0:{
                items:2,
            },
            768:{
                items:4,
            },
            1200:{
                items:6,
            }
        }
    });

    // Repair Partner Slider
    $('.repair-partner-slider').owlCarousel({
        loop: true,
        autoplay:true,
        nav: false,
        mouseDrag: true,
        autoplayHoverPause: true,
        responsiveClass: true,
        dots: false,
        margin: 30,
        navText: [
        "<i class='icofont-double-left'></i>",
        "<i class='icofont-double-right'></i>"
        ],
        responsive:{
            0:{
                items:2,
            },
            768:{
                items:4,
            },
            1200:{
                items:6,
            }
        }
    });
    
    // Blog Slider
    $('.blog-slider').owlCarousel({
        loop: true,
        autoplay:true,
        nav: false,
        mouseDrag: true,
        autoplayHoverPause: true,
        responsiveClass: true,
        dots: true,
        margin: 30,
        navText: [
        "<i class='icofont-double-left'></i>",
        "<i class='icofont-double-right'></i>"
        ],
        responsive:{
            0:{
                items:1,
            },
            768:{
                items:2,
            },
            1200:{
                items:3,
            }
        }
    });

    // Repair Services Slider
    $('.repair-services-slides').owlCarousel({
        loop: true,
        autoplay:true,
        nav: false,
        mouseDrag: true,
        autoplayHoverPause: true,
        responsiveClass: true,
        dots: true,
        margin: 30,
        navText: [
        "<i class='icofont-double-left'></i>",
        "<i class='icofont-double-right'></i>"
        ],
        responsive:{
            0:{
                items:1,
            },
            768:{
                items:2,
            },
            1200:{
                items:3,
            }
        }
    });

    // Products Image Slides
    $('.products-image-slides').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        items: 1,
        navText: [
            "<i class='icofont-simple-left'></i>",
            "<i class='icofont-simple-right'></i>"
        ],
    });

    // Tabs
    $("#tabs li").on("click", function(){
        var tab = $(this).attr("id");
        if ($(this).hasClass("inactive")) {
            $(this).removeClass("inactive");
            $(this).addClass("active");
            $(this).siblings().removeClass("active").addClass("inactive");
            $("#" + tab + "_content").addClass("show");
            $("#" + tab + "_content").siblings("div").removeClass("show");
        }
    });
    
    // Project Slides
    $('.project-slides').owlCarousel({
        loop: true,
        autoplay: true,
        nav: false,
        mouseDrag: true,
        autoplayHoverPause: true,
        responsiveClass: true,
        dots: true,
        navText: [
        "<i class='icofont-double-left'></i>",
        "<i class='icofont-double-right'></i>"
        ],
        responsive:{
            0:{
                items:1,
            },
            768:{
                items:2,
            },
            1200:{
                items:3,
            }
        }
    });
    
    // Go to Top
    $(function(){
        //Scroll event
        $(window).on('scroll', function(){
            var scrolled = $(window).scrollTop();
            if (scrolled > 300) $('.go-top').fadeIn('slow');
            if (scrolled < 300) $('.go-top').fadeOut('slow');
        });  
        //Click event
        $('.go-top').on('click', function() {
            $("html, body").animate({ scrollTop: "0" },  500);
        });
    });
    
    // Subscribe form
    $(".newsletter-form").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
        // handle the invalid form...
            formErrorSub();
            submitMSGSub(false, "Please enter your email correctly.");
        } else {
            // everything looks good!
            event.preventDefault();
        }
    });

    function callbackFunction (resp) {
        if (resp.result === "success") {
            formSuccessSub();
        }
        else {
            formErrorSub();
        }
    }
    function formSuccessSub(){
        $(".newsletter-form")[0].reset();
        submitMSGSub(true, "Thank you for subscribing!");
        setTimeout(function() {
            $("#validator-newsletter").addClass('hide');
        }, 4000)
    }
    function formErrorSub(){
        $(".newsletter-form").addClass("animated shake");
        setTimeout(function() {
            $(".newsletter-form").removeClass("animated shake");
        }, 1000)
    }
    function submitMSGSub(valid, msg){
        if(valid){
            var msgClasses = "validation-success";
        } else {
            var msgClasses = "validation-danger";
        }
        $("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
    }
    // AJAX MailChimp
    $(".newsletter-form").ajaxChimp({
        url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
        callback: callbackFunction
    });

    // Testimonials Slider
    $('.testimonials-slider').owlCarousel({
        loop: false,
        autoplay: true,
        nav: false,
        mouseDrag: true,
        autoplayHoverPause: true,
        responsiveClass: true,
        dots: true,
        margin: 30,
        navText: [
            "<i class='icofont-double-left'></i>",
            "<i class='icofont-double-right'></i>"
        ],
        responsive:{
            0:{
                items:1,
            },
            768:{
                items:1,
            },
            1200:{
                items:1,
            }
        }
    });

    // WOW JS
	$(window).on ('load', function (){
        if ($(".wow").length) { 
            var wow = new WOW ({
                boxClass:     'wow',      // Animated element css class (default is wow)
                animateClass: 'animated', // Animation css class (default is animated)
                offset:       20,         // Distance to the element when triggering the animation (default is 0)
                mobile:       true,       // Trigger animations on mobile devices (default is true)
                live:         true,       // Act on asynchronously loaded content (default is true)
            });
            wow.init();
        }
    });
    
    // Preloader
    jQuery(window).on('load', function() {
        $('.preloader-area').fadeOut();
    });



    /* Start "Digital Solutions", "Cryptocurrency", "Social Media Marketing" & "Cyber Security" "Demo JS" */

    // Reviews Slides
    $('.reviews-slides').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        margin: 25,
        autoplayHoverPause: true,
        autoplay: true,
        
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1200: {
                items: 2,
            },
            1550: {
                items: 2,
            }
        }
    });

    // Odometer JS
    $('.odometer').appear(function(e) {
        var odo = $(".odometer");
        odo.each(function() {
            var countNumber = $(this).attr("data-count");
            $(this).html(countNumber);
        });
    });

    // skill Bar
	jQuery('.skill-bar').each(function() {
		jQuery(this).find('.progress-content').animate({
		width:jQuery(this).attr('data-percentage')
		},2000);
		
		jQuery(this).find('.progress-number-mark').animate(
		{left:jQuery(this).attr('data-percentage')},
		{
			duration: 2000,
			step: function(now, fx) {
			var data = Math.round(now);
			jQuery(this).find('.percent').html(data + '%');
			}
		});  
	});

    // CS Pricing Switcher
	let el = document.getElementById('filt-monthly');
	if(el){
		let e = document.getElementById("filt-monthly"),
		d = document.getElementById("filt-yearly"),
		t = document.getElementById("switcher"),
		m = document.getElementById("monthly"),
		y = document.getElementById("yearly");
		e.addEventListener("click", function(){
			t.checked = false;
			e.classList.add("toggler--is-active");
			d.classList.remove("toggler--is-active");
			m.classList.remove("hide");
			y.classList.add("hide");
		});
		d.addEventListener("click", function(){
			t.checked = true;
			d.classList.add("toggler--is-active");
			e.classList.remove("toggler--is-active");
			m.classList.add("hide");
			y.classList.remove("hide");
		});
		t.addEventListener("click", function(){
			d.classList.toggle("toggler--is-active");
			e.classList.toggle("toggler--is-active");
			m.classList.toggle("hide");
			y.classList.toggle("hide");
		});
	}
    
    // CS Reviews Slides
    $('.cs-reviews-slides').owlCarousel({
        loop: false,
        autoplay: true,
        nav: true,
        autoplayHoverPause: true,
        dots: true,
        margin: 25,
        navText: [
            "<i class='icofont-arrow-left'></i>",
            "<i class='icofont-arrow-right'></i>"
        ],
        responsive:{
            0:{
                items: 1,
            },
            768:{
                items: 2,
            },
            1024:{
                items: 1,
            },
            1200:{
                items: 1,
            }
        }
    });

    /* Start "Digital Solutions", "Cryptocurrency", "Social Media Marketing" & "Cyber Security" "Demo JS" */
	
}(jQuery));

try {
	// function to set a given theme/color-scheme
	function setTheme(themeName) {
		localStorage.setItem('turacos_theme', themeName);
		document.documentElement.className = themeName;
	}
	// function to toggle between light and dark theme
	function toggleTheme() {
		if (localStorage.getItem('turacos_theme') === 'theme-dark') {
			setTheme('theme-light');
		} else {
			setTheme('theme-dark');
		}
	}
	// Immediately invoked function to set the theme on initial load
	(function () {
		if (localStorage.getItem('turacos_theme') === 'theme-dark') {
			setTheme('theme-dark');
			document.getElementById('slider').checked = false;
		} else {
			setTheme('theme-light');
		document.getElementById('slider').checked = true;
		}
	})();
} catch (err) {}