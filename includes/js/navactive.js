jQuery(window).load(function(){
jQuery('#main-menu li').click(function(){
        $('#main-menu .active').removeClass('active');
        $(this).addClass('active');
        });
});