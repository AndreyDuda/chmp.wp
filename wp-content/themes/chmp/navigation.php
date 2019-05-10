

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
			<ul class="nav navbar-nav navbar-right scroll-menu">
				<li class="active"><a href="#menu1"><?php echo get_theme_mod('menu1') ?></a></li>
				<li><a href="#menu2"><?php echo get_theme_mod('menu2') ?></a></li>
				<li><a href="#menu3"><?php echo get_theme_mod('menu3') ?></a></li>
				<li><a href="#menu4"><?php echo get_theme_mod('menu4') ?></a></li>
				<li><a href="#menu5"><?php echo get_theme_mod('menu5') ?></a></li>
				<li><a href="#menu6"><?php echo get_theme_mod('menu6') ?></a></li>
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
	background:<?php echo get_theme_mod('block1_background_color') ?>;
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
	<div class="container-fluid" style="overflow: hidden; position: relative" id="menu1">
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
				<?php echo get_theme_mod('block_under_video_text_main') ?>
			</h2>
			<p>
				<?php echo get_theme_mod('block_under_video_text') ?>
			</p>
		</div>
	</div>
</section>


<section class="section-3" id="menu2">
	<div class="bg"></div>
	<div class="container" >
		<div class="row"  >
			<h2><?php echo get_theme_mod('block2_main_text') ?></h2>
			<div class="image">
			
			</div>
			<div class="list">
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-microphone"></i>
					</div>
					<div class="text"><?php echo get_theme_mod('block2_text1') ?></div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-microphone"></i>
					</div>
					<div class="text"><?php echo get_theme_mod('block2_text2') ?></div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-microphone"></i>
					</div>
					<div class="text"><?php echo get_theme_mod('block2_text3') ?></div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-microphone"></i>
					</div>
					<div class="text"><?php echo get_theme_mod('block2_text4') ?></div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-microphone"></i>
					</div>
					<div class="text"><?php echo get_theme_mod('block2_text5') ?></div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-microphone"></i>
					</div>
					<div class="text"><?php echo get_theme_mod('block2_text6') ?></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-4" id="menu3">
	<div class="container" >
		<div class="row"  >
			<h2>
				<?php echo get_theme_mod('block3_main_text') ?>
			</h2>
			<div class="blocks">
				<div class="block"><?php echo get_theme_mod('block3_punkt') ?></div>
				<div class="block"><?php echo get_theme_mod('block3_punkt1') ?></div>
				<div class="block"><?php echo get_theme_mod('block3_punkt2') ?></div>
				<div class="block"><?php echo get_theme_mod('block3_punkt3') ?></div>
			</div>
			<div class="progress-block">
				<span><?php echo get_theme_mod('block3_bar')  ?></span>
				<div class="progress">
					<div class="progress-bar" style="width: <?php echo trim(get_theme_mod('block3_bar_size')) ?>%;"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-5">
	<div class="bg"></div>
	<div class="container" >
		<div class="row"  >
			<h2><?php echo get_theme_mod('block4_main_text') ?></h2>
			<div class="list">
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-microphone"></i>
					</div>
					<div class="text"><?php echo get_theme_mod('block4_text1') ?></div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-microphone"></i>
					</div>
					<div class="text"><?php echo get_theme_mod('block4_text2') ?></div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-microphone"></i>
					</div>
					<div class="text"><?php echo get_theme_mod('block4_text3') ?></div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-microphone"></i>
					</div>
					<div class="text"><?php echo get_theme_mod('block4_text4') ?></div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-microphone"></i>
					</div>
					<div class="text"><?php echo get_theme_mod('block4_text5') ?></div>
				</div>
				<div class="list-item">
					<div class="icon">
						<i class="fa fa-microphone"></i>
					</div>
					<div class="text"><?php echo get_theme_mod('block4_text6') ?></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-6" id="menu4">
	<div class="container">
		<div class="row">
			<h2><?php echo get_theme_mod('block5_main') ?></h2>
			<a target="_blank" href="<?php echo get_template_directory_uri() . '/assets/images/spiker.jpg' ?>">
				<div class="image"></div>
			</a>
			<div class="text">
				<h3><?php echo get_theme_mod('block5_name') ?></h3>
				<span><?php echo get_theme_mod('block5_text') ?></span>
			</div>
			<p>
				<?php echo get_theme_mod('block5_desc') ?>
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


<section class="section-7" id="menu5">
	<div class="bg"></div>
	<div class="container">
		<div class="row">
			<h2>
				<?php echo get_theme_mod('block5_main_text') ?>
			
			</h2>
			<span><?php echo get_theme_mod('block5_text ') ?></span>
			<form action="" >
				<input type="text" id="name_form" type="text" placeholder="Имя">
				<input type="text" id="phone_form" type="tel" placeholder="Телефон">
				<input type="button"  id="submit_chmp" value="<?php echo get_theme_mod('block5_text_button') ?>">
			</form>
			<div class="reg-block">
				<div class="icon">
					<i class="fa fa-money" aria-hidden="true"></i>
				</div>
				<div class="text">
					<h4><?php echo get_theme_mod('block5_text_button1') ?></h4>
					<span>
						<?php echo get_theme_mod('block5_text_button2') ?>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-8" ">
	<div class="container">
		<div class="row">
			<h2>
				<?php echo get_theme_mod('contact_main_text') ?>
			</h2>
			<div class="blocks">
				<div class="map" id="menu6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d971.33683187832!2d30.743500439742753!3d46.48127382939259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c63198cd4bbb4d%3A0xccef805bc260d7f9!2sIl+Decameron+Clubhouse+Odessa!5e0!3m2!1sru!2sua!4v1557413907964!5m2!1sru!2sua"
							width="700"
							height="450"
							frameborder="0"
							style="border:0"
							allowfullscreen></iframe>
				</div>
				<div class="info">
					<div class="number">
						<a href="tel:<?php echo get_theme_mod('contact_number1') ?>"><i class="fa fa-phone"></i>
							<?php echo get_theme_mod('contact_number1') ?></a>
					</div>
					<div class="number">
						<a href="tel:<?php echo get_theme_mod('contact_number2') ?>"><i class="fa fa-phone"></i>
							<?php echo get_theme_mod('contact_number2') ?></a>
					</div>
					<div class="adress">
						<i class="fa fa-map-marker"></i>
						<?php echo get_theme_mod('contact_addres') ?>
					</div>
					<div class="mail">
						<i class="fa fa-reply"></i>
						<a href="mailto:<?php echo get_theme_mod('contact_mail')?>"><?php echo get_theme_mod('contact_mail') ?></a>
					</div>
				</div>
				
			</div>
			<div class="social">
				<a href="<?php echo get_theme_mod('contact_facebook') ?>">
					<i class="fa fa-facebook-square"></i>
				</a>
				<a href="<?php echo get_theme_mod('contact_insta') ?>">
					<i class="fa fa-instagram"></i>
				</a>
			</div>
		</div>
	</div>
</section>
