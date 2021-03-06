function loadmore(){
    $('.load-more a').click(function(e){
    	var datapage = $(this).attr('data-page');
        var parent = $('.catalog-items');
        if (datapage == 'catalog') {
        	$.ajax({
	        	url : 'partials/addCatalogitem.php',
	        	success : function(data){
	            $('.catalog-items').append(data);
	            oneHeightItems();
        		}
    		});
    	}
    	else if (datapage == 'bread'){
    		$.ajax({
	        	url : 'partials/addBreaditem.php',
	        	success : function(data){
	            $('.catalog-items').append(data);
	            oneHeightItems();
	        	}
	    	});
    	}
    	else{
    		$.ajax({
	        	url : 'partials/addMalinaitem.php',
	        	success : function(data){
	            $('.catalog-items').append(data);
	            oneHeightItems();
	        	}
	    	});
    	}
        e.preventDefault();
    });
}


function popUpCatalogimg(){
    $('.loop').fancybox({
        autoSize:true,
        openEffect:'elastic',
        closeEffect:'elastic',
        fitToView:true,
        padding:0,
        wrapCSS:" popupCatalog",
        beforeLoad:function(){
            $('body, html, .main').addClass('hidden');

        },
        afterClose:function(){
            $('body, html, .main').removeClass('hidden');
        }
    });
}

$(document).ready(function(){
	loadmore();
	popUpCatalogimg();
});

$(window).load(function(){
	oneHeightItems();
});
$(window).resize(function(){
    oneHeightItems();
});