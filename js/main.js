jQuery(document).ready(function() {
    jQuery(".slider").bxSlider({
        mode: 'fade',
      captions: true,
    });
    jQuery("#owl-slider").owlCarousel({
    loop:true,
    nav:true,
    margin:10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },            
        601:{
            items:2
        },            
        960:{
            items:3
        },
        1200:{
            items:5
        }
    }
    });
});