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
        fitToView:true,
        openEffect:'elastic',
        closeEffect:'elastic',
        padding:0,
        wrapCSS:" popupCatalog",
        beforeLoad:function(){
            $('body').addClass('hidden');
        },
        afterClose:function(){
            $('body').removeClass('hidden');
        },
        afterShow:function(){
            //$('.fancybox-lock .fancybox-overlay').height($(window).height());
            console.log('qweqwe')
        }
    });

    $('.catalog_pop_close').click(function(){
        $.fancybox.close();
    });
}
function worksHeight(item){
    if($(window).width()>= 992){
        var device = 1;
        if($(window).width()<= 1366){
            device = 0.987;
        }
        if($(window).width()<= 1024){
            device = 1.01;
        }
        item.each(function() {
            var coef = ($(this).data('height-normal'))*device;
            var width = $(this).width();
            $(this).height(parseFloat(coef*width));
        });
    }
    if($(window).width()<= 992){
        item.removeAttr('style');
    }
}
// function catalogImage(){
//     var standart;
//         if($('.catalog-item-img-wrap').length){
//             $('.catalog-item-img-wrap .loop img').each(function() {
//                 standart = $(this).attr('src');
//                 console.log(standart);
//             });
//         }
//     if($(window).width() <= 768 ){
//         if($('.catalog-item-img-wrap').length){
//             $('.catalog-item-img-wrap .loop img').each(function() {
//                 var mediaImg = $(this).data('media-img');
//                 if(mediaImg == null) return;
//                 $(this).attr('src',mediaImg);
//             });
//         }
//     }
// }

$(document).ready(function(){
    //catalogImage();
    popUpCatalog();
});
$(window).load(function(){
    // if($('.massonry_wrap').length){
    //      massonryInit();
    // }
    worksHeight($('.massonry_wrap .massonry_item'));
});

$(window).resize(function() {
    worksHeight($('.massonry_wrap .massonry_item'));

});