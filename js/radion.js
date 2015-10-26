function massonryInit(){
    $('.massonry_wrap').masonry({
        itemSelector: '.massonry_item',
        percentPosition: true,
        columnWidth: '.massonry_item_sizer',
        //"gutter": 1
    });
}

$(document).ready(function(){

});
$(window).load(function(){
    massonryInit();
});