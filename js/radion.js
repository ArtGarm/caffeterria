function massonryInit(){
    $('.massonry_wrap').masonry({
        itemSelector: '.massonry_item',
        percentPosition: true,
        columnWidth: '.massonry_item_sizer',
        //"gutter": 1
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

$(document).ready(function(){
    popUpCatalog();
});
$(window).load(function(){
    if($(window).width() > 768){
         massonryInit();
    }

});