jQuery(function(){
    window.scrollReveal = new scrollReveal({reset:false, move:'50px'});
});
jQuery(document).ready( function() {
	$('.right-menu').smint();
});
jQuery(window).load(function(){
jQuery('#main-menu li').click(function(){
        $('#main-menu .active').removeClass('active');
        $(this).addClass('active');
        });
});
jQuery(window).load(function($) {
  jQuery('.magista_home-slider .flexslider').flexslider({
    animation: "slide",
    slideshowSpeed:3000
  });
});
jQuery(window).load(function($) {
  jQuery('.magista_testimonial .flexslider').flexslider({
    animation: "slide",
    slideshowSpeed:10000
  });
});
/*-----------------------------------------------------------------------------------
jQuery/* Styles SwitcherjQuery
-----------------------------------------------------------------------------------*/
(function(jQuery){
    jQuery(document).ready(function(){
       
var fileurl = "http://missioniam.com/wp-content/themes/magista/";
var fileurl1 = "http://missioniam.com/wp-content/themes/magista";


	  // Color Changer
        jQuery("#colors .green" ).click(function(){
            jQuery("#magista-colors-css" ).attr("href", fileurl+"/green.css" );
            return false;
        });
        jQuery("#colors .blue" ).click(function(){
            jQuery("#magista-colors-css" ).attr("href", fileurl1+"/style.css" );
            return false;
        });
        jQuery("#colors .orange" ).click(function(){
             jQuery("#magista-colors-css" ).attr("href", fileurl+"/orange.css" );
            return false;
        });
        jQuery("#colors .yellow" ).click(function(){
            jQuery("#magista-colors-css" ).attr("href", fileurl+"/yellow.css" );
            return false;
        });
        jQuery("#colors .golden" ).click(function(){
            jQuery("#magista-colors-css" ).attr("href", fileurl+"/golden.css" );
            return false;
        });
        jQuery("#colors .red" ).click(function(){
            jQuery("#magista-colors-css" ).attr("href", fileurl+"/red.css" );
            return false;
        });
        jQuery("#colors .purple" ).click(function(){
            jQuery("#magista-colors-css" ).attr("href", fileurl+"/purple.css" );
            return false;
        });
		  jQuery("#style-switcher h2 a").click(function(e){
            e.preventDefault();
            var div = jQuery("#style-switcher");
            console.log(div.css("left"));
            if (div.css("left") === "-120px") {
                jQuery("#style-switcher").animate({
                    left: "0px"
                });
            } else {
                jQuery("#style-switcher").animate({
                  left: "-120px"
                });
            }
        });
  });
})(this.jQuery);