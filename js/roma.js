function loadmore(){
    $('.load-more a').click(function(e){
        var parent = $('.catalog-items');
        var offSetHeight =  ruber + parent.height();
                    $.ajax({
                url : 'partials/addCatalogitem.php',

                success : function(data){
                    $('.catalog-items').append(data);
                    oneHeightItems();
                    }    
            });
         e.preventDefault();
    });
}



function popUpCatalogimg(){
    $('.loop').fancybox({
        autoSize:true,
        padding:0
    });
}

$(document).ready(function(){
	loadmore();
	popUpCatalogimg();
});

$(window).load(function(){
	oneHeightItems();
});