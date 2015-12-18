function massonryInit(){
    var masonryOptions = {
        itemSelector: '.massonry_item',
        isFitWidth: true,
        percentPosition: true,
        columnWidth: '.massonry_item_sizer'
    };
    var grid = $('.massonry_wrap').masonry();

    $(window).resize(function() {
        if($(window).width() < 992){
            grid.masonry('destroy');
        }
        if($(window).width() > 992){
            grid.masonry( masonryOptions );
        }
    });

    if($(window).width() < 992){
        grid.masonry('destroy');
    }
}

function popUpCatalog(){
    $('.catalog_pop').fancybox({
        autoSize:true,
        openEffect:'elastic',
        closeEffect:'elastic',
        padding:0,
        wrapCSS:" popupCatalog"
    });

    $('.catalog_pop_close').click(function(){
        $.fancybox.close();
    });
}


$(document).ready(function(){

});
$(window).load(function(){
    if($('.massonry_wrap').length){
         massonryInit();
    }
});