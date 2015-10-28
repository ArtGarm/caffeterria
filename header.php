<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="shortcut icon" type="image/x-icon" href="images/shipfish.ico">

	<title></title>

	<link rel="stylesheet" type="text/css" href="css/fonts.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/reset.css" media="all" />

	<link rel="stylesheet" type="text/css" href="css/style_basic.css" media="all" />

	<!--<link rel="stylesheet" href="css/tuesdayAnimate.css" media='all' />-->

	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>

	<!-- bootstrap -->

	<!--<script src="js/bootstrap.js" type="text/javascript"></script>-->

	<!-- /bootstrap -->

	<!-- form styler -->

	<link rel="stylesheet" href="css/jquery.formstyler.css" media='all' />
	<script src="js/jquery.formstyler.js" type="text/javascript"></script>

	<!-- /form styler -->

	<script src="js/selectivizr-min.js" type="text/javascript"></script>

	<script src="js/jquery.validate.min.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="all" />
	<script src="fancybox/jquery.fancybox.js" type="text/javascript"></script>

	<script src="js/modernizr.js" type="text/javascript"></script>
	<script src="js/jquery.watermark.min.js" type="text/javascript"></script>

<!-- mask for inputs -->

	<script src="js/maskInput.js" type="text/javascript"></script>

<!-- /mask for inputs -->

<!-- sliders -->
	<link rel="stylesheet" type="text/css" href="css/slick.css" media="all" />
	<script src="js/slick.js" type="text/javascript"></script>
<!-- sliders -->

<!-- masonry -->
<script src="js/masonry.pkgd.min.js"></script>
<!-- /masonry -->

<!-- jScrollPane -->
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<!-- jScrollPane -->

<!-- google Maps -->

	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script>
		var cordX = 55.822389;
		var cordY= 37.647088;
		var googleText = "Москва, Проспект Мира д. 150";
	</script>
	<script src='js/googleMapsScr.js'></script>


<!-- /google Maps -->

<!-- remove Files -->

	<script src="js/radion.js" type="text/javascript"></script>

	<script src="js/artem.js" type="text/javascript"></script>

	<script src="js/roma.js" type="text/javascript"></script>

	<script src="js/nikolay.js" type="text/javascript"></script>

	<!--<script src="js/myalert.js" type="text/javascript"></script>
	<script src="develop/autocssrenew.js" type="text/javascript"></script>-->

<!-- remove Files -->

	<link rel="stylesheet" type="text/css" href="css/artem.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/nikolay.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/roma.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/radion.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/style_main.css" media="all" />

	<link rel="stylesheet" type="text/css" href="css/adaptation_artem.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/adaptation_nikolay.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/adaptation_roma.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/adaptation_radion.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/adaptation.css" media="all" />

	<script src="js/scr.js" type="text/javascript"></script>

	<!--[if lt IE 9]>
		<script>
		document.createElement('header');
		document.createElement('nav');
		document.createElement('section');
		document.createElement('article');
		document.createElement('aside');
		document.createElement('footer');
		document.createElement('time');
		</script>
		<script src="js/pie.js" type="text/javascript"></script>
	<![endif]-->

	<!--[if lt IE 8]><script src="js/oldie/warning.js"></script><script>window.onload=function(){e("js/oldie/")}</script><![endif]-->
</head>
<body>
	<?partial('zHiddenBlock');?>
	<header class="header">
		<div class="header-top">
			<div class="mbox">
				<div class="header-logo">
					<? if($act!='index' && $act!='none'){ ?>
						<a href="#">
							<img src="images/header-logo.png" alt="" />
						</a>
					<?}else{?>
						<img src="images/header-logo.png" alt="" />
					<?}?>
				</div>

				<div class="header-basket-main">
					<div class="header-basket-icon">
						<img src="images/header-basket-icon.png" alt="" />
						<span class="header-basket-value"></span>
					</div>
					<div class="header-basket-form">
						<div class="close-form"></div>
						<form class="header-basket-form-class">
							<div class="form-title">
								<span class="form-title-items-count"></span>
								<span class="form-title-items-text"></span>
								<span class="form-title-items-sum"></span> Р
							</div>
							<div class="header-basket-form-main">
								<div class="header-basket-form-row form-row form-row-summing">
									<div class="header-basket-row-title">
										Макаруны ассорти / 450 г
									</div>
									<div class="header-basket-row-info cfix">
										<div class="header-basket-row-value">
											<span class="header-basket-row-price" data-price=99>99 Р</span>
											<div class="header-basket-row-input">
												<input type="text" value="1" name="item_1" required="required" />
												<span>шт</span>
											</div>
										</div>
										<div class="header-basket-row-item-sum">
											<span class="line-sum">0</span> P
										</div>
									</div>
								</div>
								<div class="header-basket-form-row form-row form-row-summing">
									<div class="header-basket-row-title">
										Итальянская паста “Карбонара” с тунцом и креветками, в сливочном соусе
									</div>
									<div class="header-basket-row-info cfix">
										<div class="header-basket-row-value">
											<span class="header-basket-row-price" data-price=399>399 Р</span>
											<div class="header-basket-row-input">
												<input type="text" value="1" name="item_2" required="required" />
												<span>шт</span>
											</div>
										</div>
										<div class="header-basket-row-item-sum">
											<span class="line-sum">0</span> P
										</div>
									</div>
								</div>
								<div class="header-basket-form-row form-row submit">
									<div class="header-basket-all-sum">
										<span class="form-sum"></span> P
									</div>
									<div class="header-basket-submit-button">
										<button type="submit" class="button">оформить заказ</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="header-telefone">
					<a href="tel:+7(495)7302440">
						+7 <span>(495)</span> 730-24-40
					</a>
				</div>

				<div class="sendwich-icon">
					<span></span>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="mbox">
				<div class="header-bottom-nav">
					<ul>
						<li class="second-level-wrap">
							<a href="#">О нас</a>
							<div class="second-level">

								<div class="mbox">
									<div class="second-level-wrap cfix">
										<div class="second-level-img">
											<img src="images/second-level-menu.png" alt="" />
										</div>
										<div class="second-level-menu">
											<div class="second-level-menu-wrap">
												<div class="second-level-menu-table">
													<div class="second-level-menu-row">
														<div class="second-level-menu-col">
															<div class="second-level-title">ЕДА</div>
															<div class="second-level-list">
																<ul>
																	<li><a href="#">Завтраки</a></li>
																	<li><a href="#">Топпинги / сладкие топпинги</a></li>
																	<li><a href="#">Сэндвичи</a></li>
																	<li><a href="#">Супы</a></li>
																	<li><a href="#">Салаты и закуски</a></li>
																	<li><a href="#">Основные блюда и гарниры</a></li>
																	<li><a href="#">Паста</a></li>
																	<li><a href="#">Пицца</a></li>
																	<li><a href="#">Соусы</a></li>
																</ul>
															</div>
														</div>
														<div class="second-level-menu-col">
															<div class="second-level-title">НАПИТКИ</div>
															<div class="second-level-list">
																<ul>
																	<li><a href="#">Кофе и шоколад</a></li>
																	<li><a href="#">Холодный кофе</a></li>
																	<li><a href="#">Чай</a></li>
																	<li><a href="#">Безалкогольные напитки</a></li>
																	<li><a href="#">Горячие безалкогольные напитки</a></li>
																	<li><a href="#">Соки и лимонады</a></li>
																	<li><a href="#">Свежевыжатые соки</a></li>
																	<li><a href="#">Молочные коктейли</a></li>
																</ul>
															</div>
														</div>
														<div class="second-level-menu-col">
															<div class="second-level-title">КОНДИТЕРСКАЯ</div>
															<div class="second-level-list">
																<ul>
																	<li><a href="#">Пирожные и торты</a></li>
																	<li><a href="#">Муссы</a></li>
																	<li><a href="#">Сладкие пироги</a></li>
																	<li><a href="#">Печенье</a></li>
																	<li><a href="#">Сладости</a></li>
																	<li><a href="#">Мороженое и сорбеты</a></li>
																</ul>
															</div>
														</div>
														<div class="second-level-menu-col">
															<div class="second-level-title">ПЕКАРНЯ</div>
															<div class="second-level-list">
																<ul>
																	<li><a href="#">Хлеб</a></li>
																	<li><a href="#">Круассаны</a></li>
																	<li><a href="#">Выпечка</a></li>
																	<li><a href="#">Пироги и кексы</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</li>
						<li class="second-level-wrap">
							<a href="#">меню</a>
							<div class="second-level">

								<div class="mbox">
									<div class="second-level-wrap cfix">
										<div class="second-level-img">
											<img src="images/second-level-menu.png" alt="" />
										</div>
										<div class="second-level-menu">
											<div class="second-level-menu-wrap">
												<div class="second-level-menu-table">
													<div class="second-level-menu-row">
														<div class="second-level-menu-col">
															<div class="second-level-title">ЕДА</div>
															<div class="second-level-list">
																<ul>
																	<li><a href="#">Завтраки</a></li>
																	<li><a href="#">Топпинги / сладкие топпинги</a></li>
																	<li><a href="#">Сэндвичи</a></li>
																	<li><a href="#">Супы</a></li>
																	<li><a href="#">Салаты и закуски</a></li>
																	<li><a href="#">Основные блюда и гарниры</a></li>
																	<li><a href="#">Паста</a></li>
																	<li><a href="#">Пицца</a></li>
																	<li><a href="#">Соусы</a></li>
																</ul>
															</div>
														</div>
														<div class="second-level-menu-col">
															<div class="second-level-title">НАПИТКИ</div>
															<div class="second-level-list">
																<ul>
																	<li><a href="#">Кофе и шоколад</a></li>
																	<li><a href="#">Холодный кофе</a></li>
																	<li><a href="#">Чай</a></li>
																	<li><a href="#">Безалкогольные напитки</a></li>
																	<li><a href="#">Горячие безалкогольные напитки</a></li>
																	<li><a href="#">Соки и лимонады</a></li>
																	<li><a href="#">Свежевыжатые соки</a></li>
																	<li><a href="#">Молочные коктейли</a></li>
																</ul>
															</div>
														</div>
														<div class="second-level-menu-col">
															<div class="second-level-title">КОНДИТЕРСКАЯ</div>
															<div class="second-level-list">
																<ul>
																	<li><a href="#">Пирожные и торты</a></li>
																	<li><a href="#">Муссы</a></li>
																	<li><a href="#">Сладкие пироги</a></li>
																	<li><a href="#">Печенье</a></li>
																	<li><a href="#">Сладости</a></li>
																	<li><a href="#">Мороженое и сорбеты</a></li>
																</ul>
															</div>
														</div>
														<div class="second-level-menu-col">
															<div class="second-level-title">ПЕКАРНЯ</div>
															<div class="second-level-list">
																<ul>
																	<li><a href="#">Хлеб</a></li>
																	<li><a href="#">Круассаны</a></li>
																	<li><a href="#">Выпечка</a></li>
																	<li><a href="#">Пироги и кексы</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</li>
						<li>
							<a href="#">доставка</a>
						</li>
						<li>
							<a href="#">кондитерская</a>
						</li>
						<li>
							<a href="#">пекарня</a>
						</li>
						<li>
							<a href="#">Акции и  скидки</a>
						</li>
						<li>
							<a href="#">контакты</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>