function sliderTop(){
    $('.header-slider-wrap-main').slick({
        infinite:true,
        arrows:false,
        autoplay: true,
        autoplaySpeed:3000,
        fade:true,
        cssEase:'linear',
        dots:true,
        pauseOnHover:false,
        onAfterChange: function(slide, index){
        }
    });


    $('.header-slider-wrap-main').on('afterChange', function (event, slick, currentSlide, nextSlide)
    {
        $('.counter').text("0"+(currentSlide+1));
    });
};

$(document).ready(function() {
   sliderTop();

});