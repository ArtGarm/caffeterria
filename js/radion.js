function massonryInit(){
    $('.massonry_wrap').masonry({
        itemSelector: '.massonry_item',
        percentPosition: true,
        columnWidth: '.massonry_item_sizer'
    });

    $(window).resize(function() {
        massonryInit();

        if($(window).width() <= 768){
         $('.massonry_item').removeAttr("style");
         console.log('test')
        }
    });
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
        if($(window).width() > 992){
            massonryInit();
        }

        if($(window).width() <= 992){
         $('.massonry_item, .massonry_wrap').removeAttr("style");
        }
    });
}

$(document).ready(function(){
    checkMassonry();
    popUpCatalog();
});
$(window).load(function(){
    if($(window).width() > 992){
         massonryInit();
    }

});