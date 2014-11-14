(function(jQuery){
    jQuery(document).ready(function(){
         jQuery("#feedback h2 a").click(function(e){
            e.preventDefault();
            var div = jQuery("#feedback");
            console.log(div.css("right"));
            if (div.css("right") === "-300px") {
                jQuery("#feedback").animate({
                    right: "0px"
                });
            } else {
                jQuery("#feedback").animate({
                  right: "-300px"
                });
            }
        });
  });
})(this.jQuery);  