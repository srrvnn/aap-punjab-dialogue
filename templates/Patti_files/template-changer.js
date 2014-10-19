jQuery(document).ready(function() {
		jQuery('#stylesw').styleSwitcher();
		
	jQuery('.open-close').click(function() {
		if (jQuery(this).parent().css('left') == '-250px') {
			jQuery(this).parent().animate({
				"left": "0"
			}, 300);
		} else {
			jQuery(this).parent().animate({
				"left": "-250px"
			}, 300);
		}
	});
	jQuery('a.col1').click(function() {
	jQuery("head").append(jQuery("<link rel='stylesheet' href='http://demo.deliciousthemes.com/patti/wp-content/themes/patti-demo/css/color-schemes/orange.css' type='text/css' media='screen' />"));
		return false;
	});
	jQuery('a.col2').click(function() {
	jQuery("head").append(jQuery("<link rel='stylesheet' href='http://demo.deliciousthemes.com/patti/wp-content/themes/patti-demo/css/color-schemes/red.css' type='text/css' media='screen' />"));
		return false;
	});
	jQuery('a.col3').click(function() {
	jQuery("head").append(jQuery("<link rel='stylesheet' href='http://demo.deliciousthemes.com/patti/wp-content/themes/patti-demo/css/color-schemes/blue.css' type='text/css' media='screen' />"));
		return false;
	});

    jQuery("a.col4").click(function(){
        jQuery("head").append(jQuery("<link rel='stylesheet' href='http://demo.deliciousthemes.com/patti/wp-content/themes/patti-demo/css/color-schemes/green.css' type='text/css' media='screen' />"));
        return false;
    });	
	jQuery("a.col5").click(function(){
        jQuery("head").append(jQuery("<link rel='stylesheet' href='http://demo.deliciousthemes.com/patti/wp-content/themes/patti-demo/css/color-schemes/purple.css' type='text/css' media='screen' />"));
        return false;
    });	
	jQuery("a.col6").click(function(){
        jQuery("head").append(jQuery("<link rel='stylesheet' href='http://demo.deliciousthemes.com/patti/wp-content/themes/patti-demo/css/color-schemes/yellow.css' type='text/css' media='screen' />"));
        return false;
    });	

var selectedScheme = 'light-header show-original-logo';

jQuery('#htype').change(function(){
    jQuery('#header').removeClass(selectedScheme).addClass(jQuery(this).val());
    selectedScheme = jQuery(this).val();
});    

var url = window.location.href;
if (url != '') {
    jQuery('#utype').find("option[value='"+url+"']").attr("selected", "selected");
}

});