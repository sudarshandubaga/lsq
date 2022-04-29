require('./bootstrap');
require('lightslider');

jQuery(function ($) {
    $(window).on('scroll load', function () {
        var scroll = $(window).scrollTop();

        //>=, not <=
        if (scroll >= 100) {
            //clearHeader, not clearheader - caps H
            $(".navbar-light").addClass("bg-primary");
        }
        else {
            $(".navbar-light").removeClass("bg-primary");
        }
    });


    $('.product-slider').lightSlider({
        gallery: true,
        item: 1,
        vertical: true,
        // verticalHeight: 295,
        vThumbWidth: 100,
        thumbItem: 4,
        thumbMargin: 4,
        slideMargin: 0,
        controls: false,
    });
});