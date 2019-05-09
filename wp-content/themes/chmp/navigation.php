

<div class="navbar navbar-invers navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><?php echo get_theme_mod('logo_text') ?></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="#"><?php echo get_theme_mod('menu1') ?></a></li>
				<li><a href="#"><?php echo get_theme_mod('menu2') ?></a></li>
				<li><a href="#"><?php echo get_theme_mod('menu3') ?></a></li>
				<li><a href="#"><?php echo get_theme_mod('menu4') ?></a></li>
				<li><a href="#"><?php echo get_theme_mod('menu5') ?></a></li>
			</ul>
		</div>
	</div>
</div>

<style>

video {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	-o-object-fit: cover;
	object-fit: cover;
	-o-object-position: center;
	object-position: center;
	-webkit-filter: contrast(0.45);
	-moz-filter: contrast(0.45);
	-o-filter: contrast(0.45);
	-ms-filter: contrast(0.45);
	filter: contrast(0.45);
	display: block;
	
}
.overlay {
	position: relative;
	min-height: 100vh;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
}
.overlay span {
	background:<?php echo get_theme_mod('video_box_text_color') ?>;
	color: <?php echo get_theme_mod('video_text_color') ?>;
	text-shadow: 1px 1px 2px black, 0 0 1em black;
	font-weight: bold;
	font-size: 45px;
	line-height: 1;
	mix-blend-mode: overlay;
	overflow: hidden;
	padding: 0.5em 1em;
	text-align: center;
	border-radius: 0.4em;

}

@media screen and (max-width:768px;){
	.overlay span {
		font-size: 25px;

	}
}

@media screen and (max-width:450px){
	.overlay span {
		font-size: 25px;

	}
}

</style>
<div id="headerwrap">
	<div class="container-fluid" style="overflow: hidden; position: relative">
		<div class="row centred">
			<div class="video-background">
				<div class="video-foreground">
					<div class="section active" id="section0" style="position: relative;">
						<video playsinline autoplay muted loop>
							<source src="<?php echo get_template_directory_uri() . '/assets/chmp.mp4' ?>" type="video/mp4">
						</video>
						<div class="container">
							<div class="overlay">
								
								<span><?php echo get_theme_mod('block_on_video_text') ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="section-2">
	<div class="container" >
		<div class="row"  >
			<h2>
				КУДА БУДЕМ ПОГРУЖАТЬСЯ?
			</h2>
			<p>
				Будем исследовать подводную часть «айсберга маркетингового процесса»
			</p>
		</div>
	</div>
</section>


<section class="section-3">
	<div class="bg"></div>
	<div class="container" >
		<div class="row"  >
			<h2>РАЗБЕРЁМ ТАКИЕ АКТУАЛЬНЫЕ ВОПРОСЫ, КАК:</h2>
			<div class="image">
			
			</div>
			<div class="list">
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-adn"></i>
					</div>
					<div class="text">3 главных маркетинговых тренда текущего года</div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-adn"></i>
					</div>
					<div class="text">3 главных маркетинговых тренда текущего года</div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-adn"></i>
					</div>
					<div class="text">3 главных маркетинговых тренда текущего года</div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-adn"></i>
					</div>
					<div class="text">3 главных маркетинговых тренда текущего года</div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-adn"></i>
					</div>
					<div class="text">3 главных маркетинговых тренда текущего года</div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-adn"></i>
					</div>
					<div class="text">3 главных маркетинговых тренда текущего года</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-4">
	<div class="container" >
		<div class="row"  >
			<h2>
				ЖИВОЙ МАСТЕР-КЛАСС
			</h2>
			<div class="blocks">
				<div class="block">Дата мероприятия</div>
				<div class="block">29.05.2019</div>
				<div class="block">Свободных мест</div>
				<div class="block">15</div>
			</div>
			<div class="progress-block">
				<span>Мест забронировано - 75%</span>
				<div class="progress">
					<div class="progress-bar" style="width: 75%;"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-5">
	<div class="bg"></div>
	<div class="container" >
		<div class="row"  >
			<h2>ТРЕНИНГ «МАРКЕТИНГ 3.0 ПОГРУЖЕНИЕ»</h2>
			<div class="list">
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-adn"></i>
					</div>
					<div class="text">Тренды маркетинга - бросить всё и внедрять / подождать / забить?</div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-adn"></i>
					</div>
					<div class="text">3 главных маркетинговых тренда текущего года</div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-adn"></i>
					</div>
					<div class="text">3 главных маркетинговых тренда текущего года</div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-adn"></i>
					</div>
					<div class="text">3 главных маркетинговых тренда текущего года</div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-adn"></i>
					</div>
					<div class="text">Тренды маркетинга - бросить всё и внедрять / подождать / забить?</div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-adn"></i>
					</div>
					<div class="text">Тренды маркетинга - бросить всё и внедрять / подождать / забить?</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-6">
	<div class="container">
		<div class="row">
			<h2>СПИКЕР</h2>
			<a target="_blank" href="<?php echo get_template_directory_uri() . '/assets/images/spiker.jpg' ?>">
				<div class="image"></div>
			</a>
			<div class="text">
				<h3>АЛЕКСЕЙ КОШЕЛЕВ</h3>
				<span>Генеральный директор Pro Business Center</span>
			</div>
			<p>
				Генеральный директор Центра бизнес-технологий Pro Business Center. Опытный директор проектов / программ, маркетолог, бизнес-аналитик. Сертификат Международной Ассоциации Управления проектами (IPMA), уровень A (Project Director, IPMA® Level А), сертификат Торгово-Промышленной Палаты Украины, квалификационный стандарт Бизнес-тренер (ТПП). Certified ScrumMaster® (Scrum Alliance), Certified Scrum Product Owner® (Scrum Alliance), сертифицированный НЛП-практик. В бизнесе — 20 лет. В маркетинге — 15 лет. В бизнес-обучении — 8 лет. Тренер-консультант UNDP (Программа Развития ООН). Советник президента корпорации Познякижилстрой. Автор и методолог программы инкубации конкурса стартапов «Leadership», ежегодно проводимого Киевским молодежным центром (Киевская городская государственная администрация). Имеет большой опыт реализации девелоперских и маркетинговых проектов, проектов организационного развития, как на национальном, так и на международном уровне. Реализовал и запустил ряд самостоятельных проектов, в т.ч. успешных стартапов, с нуля и под ключ.
			</p>
			<div class="social">
				<a href="#">
					<i class="fa fa-facebook-square"></i>
				</a>
				<a href="#">
					<i class="fa fa-instagram"></i>
				</a>
			</div>
			
		</div>
	</div>
</section>


<section class="section-7">
	<div class="bg"></div>
	<div class="container">
		<div class="row">
			<h2>
				ЗАРЕГИСТРИРУЙСЯ СЕЙЧАС.
			
			</h2>
			<span>КОЛИЧЕСТВО МЕСТ ОГРАНИЧЕНО!</span>
			<form action="">
				<input type="text" placeholder="Имя">
				<input type="text" placeholder="Телефон">
				<input type="submit" value="ЗАБРОНИРОВАТЬ МЕСТО">
			</form>
			<div class="reg-block">
				<div class="icon">
					<i class="fa fa-money" aria-hidden="true"></i>
				</div>
				<div class="text">
					<h4>РЕГИСТРАЦИОННЫЙ ВЗНОС — 200 грн.
					</h4>
					<span>
						Внесение регистрационного взноса необходимо для бронирования места на мастер-классе.
					</span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-8">
	<div class="container">
		<div class="row">
			<h2>
				МЕСТО ПРОВЕДЕНИЯ
			</h2>
			<div class="blocks">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d971.33683187832!2d30.743500439742753!3d46.48127382939259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c63198cd4bbb4d%3A0xccef805bc260d7f9!2sIl+Decameron+Clubhouse+Odessa!5e0!3m2!1sru!2sua!4v1557413907964!5m2!1sru!2sua"
							width="700"
							height="450"
							frameborder="0"
							style="border:0"
							allowfullscreen></iframe>
				</div>
				<div class="info">
					<div class="number">
						<i class="fa fa-phone"></i>
						044 499 72 86
					</div>
					<div class="adress">
						<i class="fa fa-map-marker"></i>
						г. Киев,
						ул. В. Василевской, 7
						офис 602
					</div>
					<div class="mail">
						<i class="fa fa-reply"></i>
						info@probusiness.center
					</div>
				</div>
				
			</div>
			<div class="social">
				<a href="#">
					<i class="fa fa-facebook-square"></i>
				</a>
				<a href="#">
					<i class="fa fa-instagram"></i>
				</a>
			</div>
		</div>
	</div>
</section>
