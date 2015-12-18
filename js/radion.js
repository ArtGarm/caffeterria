function massonryInit(){
    var masonryOptions = {
        itemSelector: '.massonry_item',
        percentPosition: true,
        columnWidth: '.massonry_item_sizer'
    };
    var grid = $('.massonry_wrap').masonry( masonryOptions );



    // if($('.massonry_wrap').length){
    //     $('.massonry_wrap').masonry({
    //         itemSelector: '.massonry_item',
    //         percentPosition: true,
    //         columnWidth: '.massonry_item_sizer'
    //     });
    // }
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
function checkMassonry(){
    $(window).resize(function() {
        // if($(window).width() > 992){
        //     massonryInit();
        // }

        if($(window).width() < 992){
         $('.massonry_item, .massonry_wrap').removeAttr("style");
        }
    });
}

$(document).ready(function(){
    //checkMassonry();
    //popUpCatalog();
});
$(window).load(function(){
    // if($(window).width() > 992){
    //      massonryInit();
    // }

});