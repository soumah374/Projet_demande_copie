(function($) {

	// Preloader'
	
	$(".validation").click(function(){
		$(window).on('load', function() {
			$("#preloader").delay(600).fadeOut();
		});	
	});
	$(window).on('load', function() {
		$("#preloader").delay(600).fadeOut();
	});
	
})(jQuery); 

