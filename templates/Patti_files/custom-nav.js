function pattinav() {
	
	// Menu Superfish Call //
	jQuery('ul#mainnav').superfish({
		delay: 800,
		speed: 'normal', 
		autoArrows: false,
		animation: {opacity:'show'},   
		animationOut: {opacity:'hide'}
	});		
}

function pattinav_extend() {


	jQuery("ul#mainnav li").css({ "overflow":"visible"});

	jQuery('#mainnav > li > a').wrapInner('<span></span>');	

	jQuery('#mainnav li.external').each(function() {
		jQuery(this).children('a').addClass('external');
		jQuery(this).removeClass('external');
	});


	
	jQuery("#navigation a").click(function () {
		if (navb.is(":visible") && navb.hasClass("mobile")) {
			navb.slideUp();
		}
	});		

	jQuery('.home #mainnav li').each(function() { 
		if(jQuery(this).hasClass('section-id')) {
			jQuery(this).addClass('current-menu-item')
		}
	});

	jQuery('#mainnav li').each(function() { 
		if(jQuery(this).hasClass('current-menu-item')) {
			jQuery(this).children('a').removeClass('external')
		}
		else {
			jQuery(this).children('a').addClass('external');
		}
	});

	// initial hello state
	if(jQuery('body').hasClass('home')) {
		jQuery('#mainnav li.initial').addClass('current')
	}

	// highlight on page
	if(!jQuery('body').hasClass('home')) {	
		jQuery('#mainnav li.current-menu-item').addClass('highlighted-state');
		jQuery('#mainnav li.current-menu-parent').addClass('highlighted-state')
	}

	// Responsive Navigation 

	var nava = jQuery(".nav-btn"),
		navb = jQuery("#navigation"),
		wind = jQuery(window).width(),	
		winh;

		if(wind < 1009) {
			 winh = jQuery(window).outerHeight()
		}
		else {
			winh = jQuery(window).outerHeight() -jQuery('#header').outerHeight()
		}

	// Add classes		
    jQuery(window).resize(function () {
		var nava = jQuery(".nav-btn"),
			navb = jQuery("#navigation"),
			wind = jQuery(window).width(),
			winh;

		if(wind < 1009) {
			 winh = jQuery(window).outerHeight()
		}
		else {
			winh = jQuery(window).outerHeight() -jQuery('#header').outerHeight()
		}
		
		if (wind > 1008) {
			navb.addClass("desktop");
			navb.removeClass("mobile")
		}
		if (wind < 1009) {
			navb.addClass("mobile");
			navb.removeClass("desktop")
		}

		// Nav CSS adjustment for mobile
		if (wind < 1009) {
		jQuery('#navigation.mobile').css({'max-height': winh-150, 'overflow-y': 'scroll'});
		}
		if (wind > 1008) {
			jQuery('#navigation.desktop').css({'overflow': 'visible'});
		}		

    });
			
		if (wind > 1008) {
			navb.addClass("desktop");
			navb.removeClass("mobile")
		}
		if (wind < 1009) {
			navb.addClass("mobile");
			navb.removeClass("desktop")
		}	
		// Nav CSS adjustment for mobile
		if (wind < 1009) {
		jQuery('#navigation.mobile').css({'max-height': winh-150, 'overflow-y': 'scroll'});
		}
		if (wind > 1008) {
			jQuery('#navigation.desktop').css({'overflow': 'visible'});
		}				

	// Click Tweak	
	nava.click(function () {
		if (navb.is(":visible")) {
			navb.slideUp()
		} else {
			navb.slideDown()
		}
	});		

	//Scroll Nav
	jQuery('#mainnav').onePageNav({
		currentClass: 'current',
		filter: ':not(.external)'
	});		

	// Fixed Element Height
	var headerheight = jQuery('#header').outerHeight();
	jQuery('.menu-fixer').css({'height': headerheight});		

}

jQuery(document).ready(function() {

	pattinav_extend();	
	
});

jQuery(window).load(function() {

	pattinav();	
	
});