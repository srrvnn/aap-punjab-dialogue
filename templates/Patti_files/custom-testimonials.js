	// Gallery Blog Slider //

// Testimonials Slider
jQuery(window).load(function() {	

	jQuery('.testimonials-slider[id^="owl-testimonials"]').each( function() { 	

		var $div = jQuery(this);
		var token = $div.data('token');

		var settingObj = window['dt_testimonials_' + token];	

		jQuery("#owl-testimonials-"+settingObj.id+"").owlCarousel({
			autoHeight : true,
			singleItem : true,
			navigation:true,
			slideSpeed : 1000
		});

	});
});