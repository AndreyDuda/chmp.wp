<?php get_header() ?>

<?php get_navigation();?>
	
	
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
					<!--<div class="block"><?php /*echo get_theme_mod('block3_punkt2') */?></div>
					<div class="block"><?php /*echo get_theme_mod('block3_punkt3') */?></div>-->
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
<!--					<div class="list-item">
						<div class="icon">
							<i class="fa fa-microphone"></i>
						</div>
						<div class="text"><?php /*echo get_theme_mod('block4_text4') */?></div>
					</div>
					<div class="list-item">
						<div class="icon">
							<i class="fa fa-microphone"></i>
						</div>
						<div class="text"><?php /*echo get_theme_mod('block4_text5') */?></div>
					</div>
					<div class="list-item">
						<div class="icon">
							<i class="fa fa-microphone"></i>
						</div>
						<div class="text"><?php /*echo get_theme_mod('block4_text6') */?></div>
					</div>-->
				</div>
			</div>
		</div>
	</section>
	
	<section class="section-6" id="menu4">
		<div class="container-fluid">
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
					<input id="name_form" type="text" placeholder="Имя">
					<input id="phone_form" type="tel" placeholder="Телефон">
					<input type="button"  id="submit_chmp" value="<?php echo get_theme_mod('block5_text_button') ?>">
				</form>
				<div class="reg-block">
					<div class="icon">
						<i class="fa fa-money" aria-hidden="true"></i>
					</div>
					<div class="text" id="menu6">
						<h4><?php echo get_theme_mod('block5_text_button1') ?></h4>
						<span>
						<?php echo get_theme_mod('block5_text_button2') ?>
					</span>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>
<?php get_footer() ?>