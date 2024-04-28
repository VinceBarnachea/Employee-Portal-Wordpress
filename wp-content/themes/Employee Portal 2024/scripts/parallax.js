jQuery( window ).on("load", function() {
    setTimeout(function () {
        jQuery('.benefits-plane,.benefits-bag,.benefits-compass').css({
            'transform' : 'translate(0,0)'
        });  
     
    }, 100);


});



jQuery(document).ready(function() {
    if($(window).width()>1024){
        var marginLeft = $('.max-container').css('margin-left');
        $('.benefits-content-container').css('padding-left',marginLeft);
    }else{
        $('.benefits-content-container').css('padding-left','5%');
    }
    jQuery(window).scroll(function() {
        var userScroll = jQuery(this).scrollTop();
        // SET LOGO SIZE MOBILE
        

        jQuery('.single-header img').css({
            'transform': 'translate(0px, ' + '-' + userScroll / 12 + 'px)'
        });
        



        



        // if (userScroll > jQuery('.home-partners-section').offset().top - (jQuery(window).height() / 6)) {
        //     jQuery('.header-menu a').css({
        //         'color': '#ffffff'
        //     });

        // } else {
        //     jQuery('.header-menu a').css({
        //         'color': '#101010'
        //     });
        // }

        // if (userScroll > jQuery('.home-contact-section').offset().top) {
        //     jQuery('.header-menu a').css({
        //         'color': '#101010'
        //     });

        // } else {
        //     jQuery('.header-menu a').css({
        //         'color': '#ffffff'
        //     });
        // }
        console.log(userScroll);
    });
});