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
  console.log( $(this).attr('id') );
  console.log( $(slide).attr('id') );
}
    });


    $('.header-slider-wrap-main').on('afterChange', function (event, slick, currentSlide, nextSlide)
    {
        $('.counter').text(currentSlide+1);
    console.log(currentSlide+1);
    });
};

$(document).ready(function() {
    sliderTop();

});