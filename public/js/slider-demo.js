jQuery(document).ready(function($){
    jQuery('#related-posts').slick({ //container
        autoplay: true,
        autoplaySpeed: 2500,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        speed: 300,
        slide: 'div',
        cssEase: 'linear',
        prevArrow:'<div class="slick-prev-button"><i class="fa  fa-chevron-circle-left fa-4x" style="color:#009688"></i></div>',
        nextArrow:'<div class="slick-next-button"><i class="fa  fa-chevron-circle-right fa-4x" style="color:#009688"></i></div>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,

                }
            },
            {
                breakpoint: 960,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,

                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1

                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode:true

                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]


    });
      jQuery('#related-posts').css('visibility', 'visible');
});