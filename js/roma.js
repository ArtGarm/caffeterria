function loadmore(){
    var currrow = 0;
    $('.row4').eq(0).show();
    $('.load-more a').click(function(e){
        currrow +=1;
        if ($('.row4').length-1 == currrow){
            $('.load-more-wrap').hide();
            $('.row4').eq(currrow).show(); 
        }
        else{
            $('.row4').eq(currrow).show();   
        }
        e.preventDefault();
    });
}

$(document).ready(function(){
	loadmore();
});

$(window).load(function(){
	oneHeightItems();
});