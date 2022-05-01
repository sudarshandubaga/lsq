require('./bootstrap');
require('lightslider');

jQuery(function ($) {


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