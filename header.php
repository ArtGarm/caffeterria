<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

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
			</div>
		</div>
		<div class="header-bottom">
			<div class="mbox">
				<div class="header-bottom-nav">
					<ul>
						<li class="second-level-wrap">
							<a href="#" class="closest-level">
								<span>О нас</span>
							</a>
							<div class="second-level device-second-level">

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
															<a href="#" class="second-level-title closest-level">
																<span>ЕДА</span>
															</a>
															<div class="second-level-list device-second-level">
																<ul>
																	<li>
																		<a href="#">
																			<span>Завтраки</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Топпинги / сладкие топпинги</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Сэндвичи</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Супы</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Салаты и закуски</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Основные блюда и гарниры</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Паста</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Пицца</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Соусы</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
														<div class="second-level-menu-col">
															<a href="#" class="second-level-title closest-level">
																<span>НАПИТКИ</span>
															</a>
															<div class="second-level-list device-second-level">
																<ul>
																	<li>
																		<a href="#">
																			<span>Кофе и шоколад</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Холодный кофе</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Чай</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Безалкогольные напитки</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Горячие безалкогольные напитки</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Соки и лимонады</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Свежевыжатые соки</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Молочные коктейли</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
														<div class="second-level-menu-col">
															<a href="#" class="second-level-title closest-level">
																<span>КОНДИТЕРСКАЯ</span>
															</a>
															<div class="second-level-list device-second-level">
																<ul>
																	<li>
																		<a href="#">
																			<span>Пирожные и торты</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Муссы</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Сладкие пироги</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Печенье</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Сладости</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Мороженое и сорбеты</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
														<div class="second-level-menu-col">
															<a href="#" class="second-level-title closest-level">
																<span>ПЕКАРНЯ</span>
															</a>
															<div class="second-level-list device-second-level">
																<ul>
																	<li>
																		<a href="#">
																			<span>Хлеб</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Круассаны</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Выпечка</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Пироги и кексы</span>
																		</a>
																	</li>
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
							<a href="#" class="closest-level">
								<span>меню</span>
							</a>
							<div class="second-level device-second-level">

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
															<a href="#" class="second-level-title closest-level">
																<span>ЕДА</span>
															</a>
															<div class="second-level-list device-second-level">
																<ul>
																	<li>
																		<a href="#">
																			<span>Завтраки</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Топпинги / сладкие топпинги</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Сэндвичи</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Супы</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Салаты и закуски</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Основные блюда и гарниры</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Паста</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Пицца</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Соусы</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
														<div class="second-level-menu-col">
															<a href="#" class="second-level-title closest-level">
																<span>НАПИТКИ</span>
															</a>
															<div class="second-level-list device-second-level">
																<ul>
																	<li>
																		<a href="#">
																			<span>Кофе и шоколад</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Холодный кофе</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Чай</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Безалкогольные напитки</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Горячие безалкогольные напитки</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Соки и лимонады</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Свежевыжатые соки</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Молочные коктейли</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
														<div class="second-level-menu-col">
															<a href="#" class="second-level-title closest-level">
																<span>КОНДИТЕРСКАЯ</span>
															</a>
															<div class="second-level-list device-second-level">
																<ul>
																	<li>
																		<a href="#">
																			<span>Пирожные и торты</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Муссы</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Сладкие пироги</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Печенье</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Сладости</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Мороженое и сорбеты</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
														<div class="second-level-menu-col">
															<a href="#" class="second-level-title closest-level">
																<span>ПЕКАРНЯ</span>
															</a>
															<div class="second-level-list device-second-level">
																<ul>
																	<li>
																		<a href="#">
																			<span>Хлеб</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Круассаны</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Выпечка</span>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<span>Пироги и кексы</span>
																		</a>
																	</li>
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
							<a href="#">
								<span>доставка</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>кондитерская</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>пекарня</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>Акции и  скидки</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>контакты</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="sendwich-icon-wrap">
					<div class="sendwich-icon">
						<span></span>
					</div>
				</div>
				<div class="sendwich-callback-button">вернуться НАЗАД</div>
			</div>
		</div>
	</header>