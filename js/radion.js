function massonryInit(){
    $('.massonry_wrap').masonry({
        itemSelector: '.massonry_item',
        //percentPosition: true
    });
}

$(document).ready(function(){
    massonryInit();
});