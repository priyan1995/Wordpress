jQuery(document).ready(function($) {

    $('#pd-intro-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
        }
    });
// testimonial slider

    $('#pd-testi-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });



// we Strive slider

    $('#we-strive-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });


});
