  <!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<!-- html manifest="app.cache" -->
<head>

	<meta charset="utf-8">

	<title>Golden City | Дагестанский камень</title>
	<meta name="description" content="">
	<meta name="Keywords" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri();?>/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri();?>/img/favicon/apple-touch-icon-114x114.png">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/bower_components/normalize-css/normalize.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font/font.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/bower_components/animate.css/animate.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/bower_components/fancybox/source/jquery.fancybox.css">

	<script src="<?php echo get_template_directory_uri();?>/bower_components/angular/angular.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/controller.min.js"></script>
</head>

<body ng-app="stone_app" ng-controller="main">
	<!-- Здесь пишем код -->
<section id="main">
	<a name="main"></a>
	<div class="wrapper_video">
		<video src="<?php echo get_template_directory_uri();?>/main_video.mp4" loop preload autoplay></video>
	</div>
	<div class="wrapper_main">
		<div class="toner">
			<div class="container">
				<header>
					<img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logotype">
					<div class="contact_block">
						<h3><span>Заказать звонок</span></h3>
						<h4>+7 (701) <span class="bold">735-33-33</span></h4>
					</div>
					<nav>
						<ul>
							<a href="#main"><li class="list_item">Главная</li></a>
							<a href="#plus"><li class="list_item">Преимущества</li></a>
							<a href="#portfolio"><li class="list_item">Портфолио</li></a>
							<a href="#project"><li class="list_item">Проектирование</li></a>
							<a href="#stone"><li class="list_item">Камень</li></a>
							<a href="#answer"><li class="list_item">Решения</li></a>
							<a href="#plitka"><li class="list_item">Плитка</li></a>
							<a href="#contact"><li class="list_item">Контакты</li></a>
						</ul>
					</nav>
					<h1 class="main_head">
						Строительные и отделочные работы <span>дагестанским камнем</span>
					</h1>
					<a href="https://www.youtube.com/embed/aULCj1AgIg8?autoplay=1" class="wrap fancybox fancybox.iframe"><div class="button"><span></span>Посмотрите видео</div></a>
				</header>
			</div>
		</div>
		<div class="white_toner">
			<div class="container">
				<ul>
					<li class="li_elem">
						<div class="elem_icon"></div>
						<span>Строительство зданий</span>
					</li>
					<li class="li_elem">
						<div class="elem_icon"></div>
						<span>Отделка фасадов домов</span>
					</li>
					<li class="li_elem">
						<div class="elem_icon"></div>
						<span>Изготовление и монтаж декоративно-скульптурных элементов</span>
					</li>
					<li class="li_elem">
						<div class="elem_icon"></div>
						<span>Проектирование объектов недвижимости на любой стадии</span>
					</li>
					<li class="li_elem">
						<div class="elem_icon"></div>
						<span>Проектирование объектов недвижимости на любой стадии</span>
					</li>
					<li class="li_elem">
						<div class="elem_icon"></div>
						<span>Продажа декоративного натурального камня из Дагестана</span>
					</li>
				</ul>
				<div class="form">
					<h3>Закажите <span>бесплатную консультацию</span></h3>
					<form id="application" action="mail.php" method="POST" name="application" class="application">
						<input name="name" id="applicationName" maxlength="20" placeholder="Введите ваше имя" required />
						<input name="email" type="email" id="applicationEmail" maxlength="20" placeholder="Введите ваш E-mail" required/>
						<input name="telephone" type="Tel" id="applicationTelephone" maxlength="20" placeholder="Введите ваш телефон" required />
						<button>Оставить заявку</button>
					</form>
				</div>
			</div>	
		</div>
	</div>
</section>	
<section id="icons">
	<a name="plus"></a>
	<div class="container">
		<div class="left_icons">
			<div class="icons_block">
				<div class="icon_in_block nth-child1"></div>
				<div>
					<h3>Авторские изделия по индивидуальным эскизам</h3>
					<p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру</p>
				</div>
			</div>
			<div class="icons_block">
				<div class="icon_in_block nth-child2"></div>
				<div>
					<h3>Ускоренное проектирование</h3>
					<p>В компании имеется собственный проектный отдел </p>
				</div>
			</div>
		</div>	
		<div class="right_icons">
			<div class="icons_block">
				<div class="icon_in_block nth-child3"></div>
				<div>
					<h3>Профессиональная бригада из России</h3>
					<p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру</p>
				</div>
			</div>
			<div class="icons_block">
				<div class="icon_in_block nth-child4"></div>
				<div>
					<h3>Комплексные решения</h3>
					<p>Проектирование, дизайн, строительство, внутренняя и внешняя </p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="portfolio">
	<a name="portfolio"></a>
	<div class="container">
		<h3>Портфолио</h3>
		<div class="port_info">
			<div ng-repeat="project in portfolio | limitTo : limit_portfolio" class="port_elem" style="background: url({{project.image_bg}})" ng-click="update_modal($index, open_modal)">
				<div class="info">
					<div class="field">
						<div class="line top"></div>
						<h4>{{project.head_short}}</h4>
						<h5>{{project.desc_short}}</h5>
						<div class="line bottom"></div>
					</div>
				</div>
			</div>
		</div>	
		<button ng-click="seeMore()"><span></span>Показать еще</button>
	</div>
</section>
<section id="project">
	<a name="project"></a>
	<div class="container">
		<h3>Проектирование</h3>
		<div class="body">
			<div class="left">
				<header> 
					<h4>
						<div class="wrap_icon">
							<div class="icon_scissors icon"></div>
						</div>
						<span>Проектирование</span>
					</h4>
					<h4>
						<div class="wrap_icon">
							<div class="icon_home icon"></div>
						</div>
						<span>Готовый объект</span>
					</h4>
				</header>
				<div class="info">
					<div class="info_elem">
						<a href="http://golden-city.kz/wp-content/uploads/2016/02/Stroi_1.jpg" class="fancybox">
							<div class="wrap_img">
								<img src="http://golden-city.kz/wp-content/uploads/2016/02/Stroi_1.jpg" alt="">
							</div>
							<div class="zoom">
								<div class="zoom_icon"></div>
							</div>
						</a>	
					</div>	
					<div class="info_elem">
						<a href="http://golden-city.kz/wp-content/uploads/2016/02/project_1.jpg" class="fancybox">
							<div class="wrap_img">
								<img src="http://golden-city.kz/wp-content/uploads/2016/02/project_1.jpg" alt="">
							</div>
							<div class="zoom">
								<div class="zoom_icon"></div>
							</div>	
						</a>
					</div>
				</div>
				<div class="info">
					<div class="info_elem">
						<a href="http://golden-city.kz/wp-content/uploads/2016/02/Stroi_2.jpg" class="fancybox">
							<div class="wrap_img">
								<img src="http://golden-city.kz/wp-content/uploads/2016/02/project_2.jpg" alt="">
							</div>
							<div class="zoom">
								<div class="zoom_icon"></div>
							</div>
						</a>	
					</div>	
					<div class="info_elem">
						<a href="http://golden-city.kz/wp-content/uploads/2016/02/project_2.jpg" class="fancybox">
							<div class="wrap_img">
									<img src="http://golden-city.kz/wp-content/uploads/2016/02/Stroi_2.jpg" alt="">
								</div>
								<div class="zoom">
									<div class="zoom_icon"></div>
								</div>
							</div>
						</a>	
				</div>
				<div class="info">
					<div class="info_elem">
						<a href="http://golden-city.kz/wp-content/uploads/2016/02/Stroi_3.jpg" class="fancybox">
							<div class="wrap_img">
								<img src="http://golden-city.kz/wp-content/uploads/2016/02/Stroi_3.jpg" alt="">
							</div>
							<div class="zoom">
								<div class="zoom_icon"></div> 
							</div>
						</a>
					</div>	
					<div class="info_elem">
						<a href="http://golden-city.kz/wp-content/uploads/2016/02/project_3.jpg" class="fancybox">
							<div class="wrap_img">
								<img src="http://golden-city.kz/wp-content/uploads/2016/02/project_3.jpg" alt="">
							</div>
							<div class="zoom">
								<div class="zoom_icon"></div>
							</div>
						</a>
					</div>
				</div>
				<img src="<?php echo get_template_directory_uri();?>/img/project_line.png" alt="line">
			</div>
			<div class="right">
				<h4>Наша компания</h4>
				<p>Занимается разработкой полного перечня проектно-сметной документации на строительство и реконструкцию, жилых, общественных и промышленных объектов недвижимости.</p>
				<div class="button"><a href="http://golden-city.kz/wp-content/themes/Golden_theme/frame/frame.html" class="fancybox fancybox.iframe"><button>Подробнее</button></a></div>
				<img src="<?php echo get_template_directory_uri();?>/img/bg_women.png" alt="women">
				<div class="form">
					<h3>Оставьте заявку менеджеру </h3>
					<form id="application" action="mail.php" method="POST" name="application" class="application">
						<input name="name" id="applicationName" maxlength="20" placeholder="Введите ваше имя" required />
						<input name="email" type="email" id="applicationEmail" maxlength="20" placeholder="Введите ваш E-mail" required/>
						<input name="telephone" type="Tel" id="applicationTelephone" maxlength="20" placeholder="Введите ваш телефон" required />
						<div class="button1"><button>Оставить заявку</button></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="stone">
	<a name="stone"></a>
	<div class="container">
		<h3>Камень</h3>
		<img src="<?php echo get_template_directory_uri();?>/img/left_col.png" alt="column_left">
		<img src="<?php echo get_template_directory_uri();?>/img/right_col.png" alt="column_right">
		<div class="icons_stone">
			<div class="icon_elem_once">
				<div class="icon icon1"></div>
				<p class="first"><span class="bold">Легко поддается обработке,</span> что позволяет реализовать архитектурные <br> и дизайнерские идеи</p>
			</div>
			<div class="icon_elem_once">
				<div class="icon icon2"></div>
				<p class="second"><span class="big">Устойчив </span><br> к воздействию <span class="bold">мороза, загрязнений и воды.</span></p>
			</div>
			<div class="icon_elem_once">
				<div class="icon icon3"></div>
				<p class="third">Используется внутри помещения, так как является <span class="bold">экологически - чистым материалом</span></p>
			</div>
			<div class="icon_elem_once">
				<div class="icon icon4"></div>
				<p class="fouth"><span class="header">Благодаря пористой структуре камня</span> <br> -  <span class="bold">стены дышат</span>, а это благотворно влияет на микроклимат дома <br> -  обладает <span class="bold">низкой теплопроводностью и высокой шумоизоляцией</span> </p>
			</div>
			<div class="icon_elem_once icon_elem_last">
				<div class="icon icon5"></div>
				<p class="five">Облицовка производится непосредственно на стены без дополнительных профилей, обеспечивая <span class="bold">долговечность фасада от 30 лет</span></p>
			</div>
		</div>
	</div>
</section>
<section id="oform">
	<a name="answer"></a>
	<div class="container">
		<h3>Технические решения <br> для оформления фасадов</h3>
		<p>Разнообразный и богатый опыт рамки и место обучения кадров позволяет выполнять важные задания по разработке направлений прогрессивного развития. Таким образом рамки и место обучения кадров представляет собой интересный эксперимент проверки соответствующий условий активизации. <br>
		<br>
		Таким образом постоянный количественный рост и сфера нашей активности требуют определения и уточнения системы <br> <br> обучения кадров, соответствует насущным потребностям. Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции требуют определения и уточнения позиций, занимаемых участниками в отношении поставленных задач.</p>
		<div class="oform_block_1">
			<div class="oform_elem">
				<h4>Карниз одинарный</h4>
				<div class="wrap_img"><img src="<?php echo get_template_directory_uri();?>/img/karniz_1.jpg" alt=""></div>
				<a href="http://golden-city.kz/wp-content/themes/Golden_theme/pdf/carniz_one.rar">Скачать материал</a>
			</div>
			<div class="oform_elem">
				<h4>Карниз двойной</h4>
				<div class="wrap_img"><img src="<?php echo get_template_directory_uri();?>/img/karniz_2.jpg" alt=""></div>
				<a href="http://golden-city.kz/wp-content/themes/Golden_theme/pdf/carniz_double.rar">Скачать материал</a>
			</div>
			<div class="oform_elem">
				<h4>Карниз тройной</h4>
				<div class="wrap_img"><img src="<?php echo get_template_directory_uri();?>/img/karniz_3.jpg" alt=""></div>
				<a href="http://golden-city.kz/wp-content/themes/Golden_theme/pdf/carniz_triple.rar">Скачать материал</a>
			</div>
			<div class="oform_elem">
				<h4>Карниз сложный</h4>
				<div class="wrap_img"><img src="<?php echo get_template_directory_uri();?>/img/karniz_4.jpg" alt=""></div>
				<a href="http://golden-city.kz/wp-content/themes/Golden_theme/pdf/karniz_hard.rar">Скачать материал</a>
			</div>
		</div>
		<div class="oform_block_2">
			<div class="oform_elem">
				<h4>Стеновая плитка</h4>
				<div class="wrap_img"><img src="<?php echo get_template_directory_uri();?>/img/karniz_1.jpg" alt=""></div>
				<a href="http://golden-city.kz/wp-content/themes/Golden_theme/pdf/plitka.rar">Скачать материал</a>
			</div>
			<div class="oform_elem">
				<h4 class="dubl_line">Стеновая плитка <br> <span>Рустованная кладка</span></h4>
				<div class="wrap_img"><img src="<?php echo get_template_directory_uri();?>/img/karniz_2.jpg" alt=""></div>
				<a href="http://golden-city.kz/wp-content/themes/Golden_theme/pdf/plitka_rust.rar">Скачать материал</a>
			</div>
			<div class="oform_elem">
				<h4>Декор</h4>
				<div class="wrap_img"><img src="<?php echo get_template_directory_uri();?>/img/karniz_3.jpg" alt=""></div>
				<a href="http://golden-city.kz/wp-content/themes/Golden_theme/pdf/decor.rar">Скачать материал</a>
			</div>
		</div>
		<a href="http://golden-city.kz/wp-content/themes/Golden_theme/pdf/all.rar"><div class="button"><button><span>Скачать все материалы</span></button></div></a>
	</div>
</section>
<section id="slider" ng-controller="plitka_slider">
	<a name="plitka"></a>
	<div class="container">
		<h3>Тротуарная плитка</h3>
		<div class="plitka">
			<div class="plitka_elem plitka_1" ng-click="button_click(0)"></div>
			<div class="plitka_elem plitka_2" ng-click="button_click(1)"></div>
			<div class="plitka_elem plitka_3" ng-click="button_click(2)"></div>
			<div class="plitka_elem plitka_4" ng-click="button_click(3)"></div>
			<div class="plitka_elem plitka_5" ng-click="button_click(4)"></div>
			<div class="plitka_elem plitka_6" ng-click="button_click(5)"></div>
		</div>
		<div class="left">
			<p>Новый уникальный продукт нашей компании — <span class="bold">элитная тротуарная плитка</span>, до настоящего <br> времени не производившаяся в Казахстане.</p>
			<h4>Примеры выкладки</h4>
			<div class="slider">
				<div class="left_arrow arrow" ng-click="slide_left()"></div>
				<div class="right_arrow arrow" ng-click="slide_right()"></div>
				<div class="wrap_slider">
					<img src="<?php echo get_template_directory_uri();?>{{main_src}}" alt="">
				</div>
			</div>
			<div class="list">
				<div class="icon active" ng-click="button_click(0)"></div>
				<div class="icon" ng-click="button_click(1)"></div>
				<div class="icon" ng-click="button_click(2)"></div>
				<div class="icon" ng-click="button_click(3)"></div>
				<div class="icon" ng-click="button_click(4)"></div>
				<div class="icon" ng-click="button_click(5)"></div>
			</div>
		</div>
		<div class="right">
			<h4>По строительным расчетам <span class="bold">срок службы</span> нашей тротуарной плитки составляет <span class="bold">20-25 лет.</span> </h4>
			<ul>
				<li class="li_elem">
					<div class="elem_icon elem_icon_sec"></div>
					<span>Изделия обладают высоким качеством, их прочность составляет 400 кг/кв.см.</span>
				</li>
				<li class="li_elem">
					<div class="elem_icon elem_icon_fourth"></div>
					<span>Высокая прочность и морозостойкость (200 циклов), это достигается за счет использования специальных добавок и модификаторов</span>
				</li>
				<li class="li_elem">
					<div class="elem_icon"></div>
					<span>Не поглощают водяные пары из воздуха</span>
				</li>
				<li class="li_elem">
					<div class="elem_icon elem_icon_third"></div>
					<span>Способны противостоять химическим веществам и механическому воздействию</span>
				</li>
				<li class="li_elem">
					<div class="elem_icon"></div>
					<span>Не подвергаются коррозии и гниению</span>
				</li>
				<li class="li_elem">
					<div class="elem_icon"></div>
					<span>Устойчивы к плесени и грибку</span>
				</li>
				<li class="li_elem">
					<div class="elem_icon"></div>
					<span>Экологически чистые</span>
				</li>
				<li class="li_elem">
					<div class="elem_icon"></div>
					<span>Имеют красивый внешний вид</span>
				</li>
			</ul>
		</div>
	</div>
</section>
<section id="communication">
	<div class="container">
		<h3>Остались вопросы? <a href="#main">Наши специалисты ответят на них!</a></h3>
	</div>
</section>
<section id="map">	
	<a name="contact"></a>
	<div class="container">
		<div class="map_contact">
			<img src="<?php echo get_template_directory_uri();?>/img/logo_map.png">
			<p>Казахстан, г. Темиртау пр.Республики 167</p>
			<div class="adress"><span>E-mail:</span>  <a href="">golden-city07@mail.ru</a></div>
			<div class="tel"><span>Телефоны:</span> +7 (701) 735-33-33, <br> +7 (775) 462-39-65, +7 (701) 497-60-21</div>
		</div>
	</div>
	<div id="map_canvas_main"></div>
</section>
<footer>
	<div class="container">
		<h3><span>«GoldenCity»</span> —  © 2016</h3>
		<a href="mindpro-group.com"><img src="<?php echo get_template_directory_uri();?>/img/mind_logo.png" alt=""></a>
	</div>
</footer>
<!--     Пример формы обратной связи          -->
<!-- 	<div class="main">
      <h3>Внимание</h3>
      <p>Оставьте ваши контактные данные и наш консультант<br/>свяжется с вами в течении 30 секунд</p>

		<form id="application" action="mail.php" method="POST" name=" application ">
			<input name="name" id="applicationName" maxlength="20" placeholder="Введите ваше имя" required />
			<input name="email" type="email" id="applicationEmail" maxlength="20" placeholder="Введите ваш E-mail" required/>
			<input name="telephone" type="Tel" id="applicationTelephone" maxlength="20" placeholder="Введите ваш телефон" required />
			<input type="submit">
			<div id="app"> Отправить </div>
		</form>
	</div> -->
	<div id="modal" class="close">
		<div class="wrapper animated fadeIn">
			<div class="closer"></div>
			<div class="left_arrow arrow" ng-click="slide_left()"></div>
			<div class="right_arrow arrow" ng-click="slide_right()"></div>
			<div class="left">
				<div class="wrap_img">
					<img src="{{modal.main_img}}" alt="">
				</div>
				<div class="lenta">
					<div class="wrap_img wrap_elem_modal first">
						<img ng-src="{{modal.thumbnails[0]}}">
						<div class="icon"><div class="icon_zoom"></div></div>
					</div>
					<div class="wrap_img wrap_elem_modal">
						<img ng-src="{{modal.thumbnails[1]}}">
						<div class="icon"><div class="icon_zoom"></div></div>
					</div>
					<div class="wrap_img wrap_elem_modal">
						<img ng-src="{{modal.thumbnails[2]}}">
						<div class="icon"><div class="icon_zoom"></div></div>
					</div>
					<div class="wrap_img wrap_elem_modal last">
						<img ng-src="{{modal.thumbnails[3]}}">
						<div class="icon"><div class="icon_zoom"></div></div>
					</div>
				</div>
			</div>
			<div class="right">
				<h3>{{modal.header}}</h3>
				<p>{{modal.description}}</p>
			</div>
		</div>
	</div>
	<div id="mail" class="not_visible_mail"></div>



	<!--[if lt IE 9]>
	<script src="bower_components/html5shiv/es5-shim.min.js"></script>
	<script src="bower_components/html5shiv/html5shiv.min.js"></script>
	<script src="bower_components/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="bower_components/respond/respond.min.js"></script>
	<![endif]-->

	<script src="<?php echo get_template_directory_uri();?>/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/bower_components/fancybox/source/jquery.fancybox.pack.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/common.min.js"></script>
	<script src="http://maps.google.com/maps/api/js"></script>
	<script crossorigin="anonymous" async type="text/javascript" src="//api.pozvonim.com/widget/callback/v3/9a3fff656047b6c7d86f8e3c179849a2/connect" id="check-code-pozvonim" charset="UTF-8"></script>
</body>
</html>