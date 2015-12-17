var scroller=jQuery.browser.webkit ? "body": "html";

/* modernize */
function modernize() {
	// placeholder
	if(!Modernizr.input.placeholder){
		$('[placeholder]').each(function() {
			$(this).watermark($(this).attr('placeholder'));
		});
	}
}


/* input only Number  */
function inputNumber(block) {
	$('input', block).keypress(function(e) {
		if (e.which >= 47 && e.which <= 57 ){}
		else return false;
	});

	$('input', block).keyup(function() {
		$inputNum = $(this);
		if ($inputNum.val == '' || $inputNum.val() == 0) {
			$inputNum.val('1');
		}
	});
}


/* u_tabs */
function u_tabs(link, block) {
	$(link).click(function(e) {
		var $currentTab = $(this);
		var tabId = $currentTab.data('utab');

		$(link).removeClass('active');
		$currentTab.addClass('active');

		$(block).hide().removeClass('active');
		$(block+'[data-utab="' + tabId + '"]').show().addClass('active');
		if($(link).is('a')){
			e.preventDefault();
		}
	});
	$(link).eq(0).click();
}

/* scrollUp */
function scrollUp(block,targetBlock) {

	$(block).click(function(e){
		var target = $(targetBlock).offset().top;

		$(scroller).animate({scrollTop:target},800);
		return false;

		e.preventDefault();
	});
}


function initScrollpane(){
	$('.scroll-pane').jScrollPane();
}


function oneHeightItems(){

	function oneHeight(block){
		var height=0;
		block.removeAttr('style');
		block.each(function(){
			if($(this).height()>height){
				height=$(this).height();
			}
		});
		block.css('height', height);
	}
    oneHeight($('.catalog-item-desc.oneHeight'));
	oneHeight($('.catalog-item.oneHeight:not(.action-item)'));

}

function validate(form, options){
    var setings = {
        errorFunction:null,
        submitFunction:null,
        highlightFunction:null,
        unhighlightFunction:null
    }
    $.extend(setings, options);

    var $form = $(form);

    if ($form.length && $form.attr('novalidate') === undefined) {
        $form.on('submit', function(e) {
            e.preventDefault();
        });

        $form.validate({
            errorClass : 'errorText',
            focusCleanup : true,
            focusInvalid : false,
            invalidHandler: function(event, validator) {
                if(typeof(setings.errorFunction) === 'function'){
                    setings.errorFunction(form);
                }
            },
            errorPlacement: function(error, element) {
                error.appendTo( element.closest('.form_input'));
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('error');
                $(element).closest('.form_row').addClass('error').removeClass('valid');
                if( typeof(setings.highlightFunction) === 'function' ) {
                    setings.highlightFunction(form);
                }
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('error');
                if($(element).closest('.form_row').is('.error')){
                    $(element).closest('.form_row').removeClass('error').addClass('valid');
                }
                if( typeof(setings.unhighlightFunction) === 'function' ) {
                    setings.unhighlightFunction(form);
                }
            },
            submitHandler: function(form) {
                if( typeof(setings.submitFunction) === 'function' ) {
                    setings.submitFunction(form);
                } else {
                    form.submit();
                }
            }
        });

        $('[required]',$form).each(function(){
            $(this).rules( "add", {
                required: true,
                messages: {
                    required: "Вы пропустили"
                }
            });
        });

        if($('[type="email"]',$form).length) {
            $('[type="email"]',$form).rules( "add",
            {
                messages: {
                    email: "Невалидный email"
                 }
            });
        }

        if($('.tel-mask[required]',$form).length){
            $('.tel-mask[required]',$form).rules("add",
            {
                messages:{
                    required:"Введите номер мобильного телефона."
                }
            });
        }
    }
}

function validationCall(form){

  var thisForm = $(form);
  var formSur = thisForm.serialize();

    $.ajax({
        url : thisForm.attr('action'),
        data: formSur,
        method:'POST',
        success : function(data){
            if ( data.trim()!='true') {
                thisForm.trigger("reset");
                popNext();
            }
            else {
               $(this).trigger('reset');
            }

        }
    });

    function popNext(){
        $.fancybox.open("#call_success",{
            padding:0,
            fitToView:false,
            wrapCSS:"call-popup",
            autoSize:true,
            afterClose: function(){
                $('form').trigger("reset");
                clearTimeout(timer);
            }
        });
        var timer = null;

        timer = setTimeout(function(){
            $('form').trigger("reset");
            $.fancybox.close("#call_success");
        },2000);


    }
}

function animationBlock(item){

    $(window).scroll(function(){
        checkForAnimate();
    });

    function checkForAnimate(){
        var bottomCheck = $(window).height()+$(window).scrollTop();
        var windowTop = $(window).scrollTop()+($(window).height()/1.5);
        item.each(function(){
           if(windowTop>$(this).offset().top || bottomCheck > $('body').height()*0.98){

              var itemSect = $(this);
              var point = 0;
              itemSect.find('.animate-it').addClass('animated');

              var timer = setInterval(function(){
                 itemSect.find('.animate-delay').eq(point).addClass('animated');
                 point++;
                 if(itemSect.find('.animate-delay').length == point){
                     clearInterval(timer);
                 }
              },200);


           }
        });
    }
    checkForAnimate();
}

function formCount(form){

    var formMain = $(form);

    function sumingItems(formMain){

        var itemsLength = formMain.find('.form-row-summing').length;
        var titleText;
        var allSum = 0;

        formMain.find('.form-row-summing').each(function(){
            allSum = allSum + parseInt($(this).find('.line-sum').text());
        });

        if(itemsLength == 1){
            titleText = " Товар на ";
        }
        else if (itemsLength > 1 && itemsLength < 5){
            titleText = "Товара на ";
        }
        else{
            titleText = " Товаров на ";
        }

        formMain.find('.form-title .form-title-items-count').text(itemsLength);
        formMain.find('.form-title .form-title-items-text').text(titleText);
        formMain.find('.form-title .form-title-items-sum').text(gap(allSum.toString()));
        formMain.find('.form-sum').text(allSum);

        if(formMain.is('.header-basket-form-class') && itemsLength!=0){
            var parent = formMain.parents('.header-basket-main');
            parent.find('.header-basket-icon').addClass('active');
            parent.find('.header-basket-value').text(itemsLength);
        }

    };

    function sumingLine(line){

        var linePrice = parseInt(line.find('[data-price]').data('price'));
        var lineCount = parseInt(line.find('input').val());

        var lineSum = linePrice * lineCount;
        line.find('.line-sum').text(lineSum);

        sumingItems(formMain);

    };

    formMain.find('.form-row-summing').each(function() {

        sumingLine($(this));

    });

    formMain.find('.form-row-summing input').keyup(function(){

        var parentLine = $(this).parents('.form-row-summing');

        sumingLine(parentLine);

    });

}

function gap(strval) {
  return strval.replace(/\d(?=(?:\d{3})+\b)/g, "$&" +' ');
}

function showHideHeaderform(){

    $(document).click(function (e) {
            var container = $(".header-basket-main");

            if (container.has(e.target).length !== 0 && !$(e.target).is('.close-form')){
                if($('.header-basket-form .header-basket-form-row').length!=0){
                    if($(window).width()<1025){
                        $('.header-bottom').css({'z-index':'0'});
                        $('.header-basket-main').addClass('show');
                    }
                    else{
                        $('.header-basket-form').slideDown(300);
                    }
                }
            }
            else if(container.has(e.target).length === 0 || $(e.target).is('.close-form')){
                if($(window).width()<1025){
                    setTimeout(
                        function(){
                            $('.header-bottom').removeAttr('style');
                        },280
                    );
                    $('.header-basket-main').removeClass('show');
                }
                else{
                    $('.header-basket-form').slideUp(300);
                }
            }
    });

    $(document).on('click','.header-basket-form .close-form',function(){

        if($(window).width()<1025){
            $('.header-basket-main').removeClass('show');
        }
        else{
           $('.header-basket-form').slideUp(300);
        }

    });
};

function showSecondLevel(){
    $('.header-bottom-nav>ul>li').hover(
        function() {
            if($(window).width()>1024){
                $(this).find( ".second-level").stop().slideDown(300);
            }

        },
        function() {
            if($(window).width()>1024){
                $(this).find( ".second-level").stop().slideUp(300);
            }
        }
    );
};

function showSecondLevelDevices(){

    $(document).on('click','.sendwich-icon-wrap', function(){
        if($(this).is('.active')){
            $(this).removeClass('active');
            $('.show').removeClass('show');
        }
        else{
            $(this).addClass('active');
            $('.header-bottom').addClass('show');
        }
    });

    $(document).on('click', '.sendwich-callback-button', function(){

        if($('.second-level-list.show').length!=0){
            $('.second-level-list').removeClass('show');
        }
        else if($('.second-level.show').length!=0){
            $('.second-level').removeClass('show');
            $(this).removeClass('show');
        }

    });

    $(document).on('click', '.closest-level', function(e){
        if($(window).width()<1025){
            e.preventDefault();
            $(this).parent().find('>.device-second-level').addClass('show');
            $('.sendwich-callback-button').addClass('show');
        }
    });

    /*
    function addIndex(){
        if($(window).width()<1025){
            var point = $('.header-bottom-nav > ul > li').length;
            $('.header-bottom-nav > ul > li').each(function(){
                $(this).css('z-index', point);
                point--;
            });
        }
    }

    $(document).on('click', function(e){

        if($(window).width() < 1025){
            var container = $(".header-bottom-nav>ul");

            if (container.has(e.target).length === 0 || $(e.target).is('li.active')){

                $('.header-bottom-nav li.active').removeClass('active');
                container.find('.second-level').slideUp(300);
            }
            else if($(e.target).is('li.second-level-wrap')){
                var item = $(e.target);
                if(!item.is('.active')){
                    $('.header-bottom-nav li.active').removeClass('active');
                    item.addClass('active');
                    $('.header-bottom-nav li:not(.active) .second-level').slideUp(300);
                    item.find('.second-level').slideDown(300);
                }

            }

        }

    });

    addIndex();

    $(window).resize(function(){

        addIndex();

        if($(window).width() > 1025){
            $('.header-bottom, .second-level').removeAttr('style');
        }

    });
    */

};

/* DOCUMENT READY  */
$(document).ready(function() {
	modernize();
	$('.footer_placeholder').height($('.footer').outerHeight());

	oneHeightItems();

});

$(window).load(function(){

    inputNumber('.header-basket-row-input');
    formCount('.header-basket-form-class');
    validate('.header-basket-form-class', {submitFunction:validationCall});
    showHideHeaderform();
    showSecondLevel();
    showSecondLevelDevices();

});

$(window).resize(function() {

    $('.footer_placeholder').height($('.footer').outerHeight());
});






