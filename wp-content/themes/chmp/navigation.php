

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
				<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
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
<div id="headerwrap" style="display: block; height:auto;>
	<div class="container">
		<div class="row centred">
			<div class="video-background">
				<div class="video-foreground">
					<div class="section active" id="section0">
						<video playsinline autoplay muted loop>
							<source src="<?php echo get_template_directory_uri() . '/assets/chmp.mp4' ?>" type="video/mp4">
						</video>
						<div class="overlay">
							<span><?php echo get_theme_mod('block_on_video_text') ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row centred">
	
	<div id="wrap">
		adasdasdasd
	</div>

</div>