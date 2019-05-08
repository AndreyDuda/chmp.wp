<style>
	body{
		background: <?php echo get_theme_mod('body_background') ?>;
		font-family: "Lato";
		font-weight: 300;
		font-size: 16px;
		color:<?php echo get_theme_mod('text_color_body') ?>;
		
		-webkit-font-smoothing: antialiased;
		-webkit-overflow-scrolling: touch;
		
		margin-top: 70px;
	}
	
	.navbar {
		font-family: "Lato";
		font-weight: 600;
		font-size: 18px;
	}
	
	h1, h2, h3, h4, h5, h6 {
		font-family: "Releway";
		font-weight: 300;
		color: <?php echo get_theme_mod('h_color') ?>;
	}
	
	p {
		line-height: 28px;
		margin-bottom: 25px;
	}
	
	.centered {
		text-align: center;
	}
	
	a {
		color: <?php echo get_theme_mod('nav_color') ?>;
	}
	
	a:hover, a:focus {
		color: <?php echo get_theme_mod('nav_color_hover') ?>;
		background-color: <?php echo get_theme_mod('nav_background') ?> ;
		text-decoration: none;
		outline: 0;
	}
	
	.navbar-invers {
		background: <?php echo get_theme_mod('nav_background') ?> ;
		bprder-color: <?php echo get_theme_mod('nav_background') ?> ;
	}
	
	.navbar-invers .navbar-nav > .active > a {
		background-color: <?php echo get_theme_mod('nav_background') ?> ;
		border-bottom: 1px solid <?php echo get_theme_mod('nav_color') ?>;
	}
	
	.navbar-invers .navbar-nav > li > a:hover {
		background-color: <?php echo get_theme_mod('nav_background') ?> ;
	}
	
	.navbar-invers .navbar-brand {
		color: <?php echo get_theme_mod('logo_text_color') ?>;
		font-weight: bolder;
		font-size: 18px;
		letter-spacing: 1px;
	}
	.navbar-toggle .icon-bar {
		background: <?php echo get_theme_mod('nav_color') ?>;
		border: 1px solid <?php echo get_theme_mod('nav_color') ?>;
	}
	
	#wrap {
		background: url(<?php echo get_template_directory_uri().'/assets/images/im.jpeg' ?>);
		background-attachment: relarive;
		background-position: center;
		width: 100%;
		background-size: 100%;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		display: block;
		height: 600px;
	}

</style>