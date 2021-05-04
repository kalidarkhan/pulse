$(document).ready(function(){
    $('.carousel__inner').slick({
        prevArrow: '<button type="button" class="slick-prev"><img src="../img/carousel/pulse_left_solid.png"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="../img/carousel/pulse_right_solid.png"></button>',
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    dots: true,
                    arrows: false
                }
            }
        ]
    });
  });