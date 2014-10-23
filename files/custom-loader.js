jQuery(document).ready(function(){
 
jQuery("body").queryLoader2({
            onComplete: function() {},
            onLoadComplete: function() {},
            backgroundColor: "#fff",
            barColor: dt_loader.bcolor,
            overlayId: 'qLoverlay',
            barHeight: 4,
            percentage: false,
            deepSearch: true,
            completeAnimation: "fade",
            minimumTime: 500    
        });
ready = 1;

});
