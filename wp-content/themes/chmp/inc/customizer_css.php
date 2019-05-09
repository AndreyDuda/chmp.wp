<style>
	body{
		font-family: 'Open Sans',sans-serif;
		font-weight: 300;
		font-size: 16px;
		background:<?php echo get_theme_mod('main_color') ?>;
		margin-top: 70px;
		color: <?php echo get_theme_mod('main_color_text') ?>;;
	}
	.navbar {
		font-weight: 600;
		font-size: 18px;
	}
	
	h1, h2, h3, h4, h5, h6 {
		font-family: "Releway";
		font-weight: 300;
		position: relative;
	}
	p {
		line-height: 28px;
		margin-bottom: 25px;
	}
	.centered {
		text-align: center;
	}
	.navbar-invers ul li a {
		color: <?php echo get_theme_mod('nav_color') ?>;
	}
	.navbar-invers a.navbar-brand {
		color: <?php echo get_theme_mod('nav_brand_color') ?>;
	}
	
	a:hover, a:focus {
		text-decoration: none;
		outline: 0;
		color: #81164e;
	}
	.social {
		display: flex;
		justify-content: center;
	}
	.social i {
		font-size: 30px;
		margin-right: 7px;
	}
	.navbar-invers {
		background: <?php echo get_theme_mod('nav_background') ?>;
	}
	.navbar-invers .navbar-brand {
		font-weight: bolder;
		font-size: 18px;
		letter-spacing: 1px;
	}
	#headerwrap{
		width: 100%;
		background-size: 100%;
		display: block;
		height: max-content;
		overflow: hidden;
		position: initial;
	}
	.icon-bar {
		background: #000;
	}
	h2{
		margin-bottom: 40px;
	}
	h2+p {
		border: none;
		font-size: 18px;
		font-style: italic;
		line-height: 32px;
		color: gray;
	}
	h2:after {
		content: '';
		display: block;
		width: 40px;
		height: 3px;
		background: #81164e;
		position: absolute;
		bottom: -10px;
		left: 50%;
		transform: translateX(-50%);
	}
	section {
		padding: 50px 0;
		text-align: center;
	}
	.section-2{
		display: flex;
		justify-content: center;
		align-items: center;
		text-align: center;
	}
	.section-3 {
		display: flex;
		flex-direction: column;
		align-items: center;
		position: relative;
	}
	.section-3 .bg {
		background: url(<?php echo get_template_directory_uri().'/assets/images/img-2.jpg' ?>);
		background-size: 100%;
		background-position: center;
		background-attachment: fixed;
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		filter: brightness(30%);
		z-index: -1;
	}
	
	.section-3 h2 {
		color: #fff;
	}
	.section-3 .image {
		background: url(<?php echo get_template_directory_uri().'/assets/images/img-3.jpg' ?>);
		max-width: 1000px;
		margin: 0 auto 50px;
		-webkit-background-size: cover;
		background-size: cover;
		height: 700px;
	}
	.section-3 .list {
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
		margin-bottom: 50px;
	}
	.section-3 .icon {
		width: 50px;
		height: 50px;
		background: #43a898;
		margin-right: 10px;
		text-align: center;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.section-3 .icon i {
		font-size: 35px;
		color: #fff;
	}
	.section-3 .list-item {
		display: flex;
		justify-content: center;
		align-items: center;
		width: 50%;
		margin-bottom: 20px;
		
	}
	.section-3 .list-item .text {
		color: #fff;
		font-weight: bold;
	}
	
	
	.section-4 .blocks {
		display: flex;
		flex-direction: column;align-items: center;
	}
	.section-4 .block {
		width: 300px;
		padding: 5px 30px;
		font-weight: bold;
		font-size: 24px;
		border: 2px solid #81164e;
		border-radius: 10px;
		margin-bottom: 10px;
		box-shadow: 0 0 15px rgba(0,0,0,.25)
	}
	.section-4 .row {
		display: flex;
		flex-direction: column;
		align-items: center;
	}
	
	
	.progress-block {
		margin-top: 20px;
	}
	.progress {
		margin: 0 auto;
		width: 400px;
	}
	
	.progress {
		padding: 2px;
		background: rgba(0, 0, 0, 0.25);
		border-radius: 6px;
		box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25), 0 1px rgba(255, 255, 255, 0.08);
	}
	
	.progress-bar {
		background-color: <?php echo get_theme_mod('block3_bar_color') ?>;
		height: 16px;
		border-radius: 4px;
		background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.05));
		transition: 0.4s linear;
		transition-property: width, background-color;
		box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.25), inset 0 1px rgba(255, 255, 255, 0.1);
	}
	
	.section-5 {
		position: relative;
		display: flex;
		flex-direction: column;
		align-items: center;
	}
	.section-5 .bg {
		background: url(<?php echo get_template_directory_uri().'/assets/images/img-2.jpg' ?>);
		background-size: 100%;
		background-position: center;
		background-attachment: fixed;
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		filter: brightness(30%);
		z-index: -1;
	}
	.section-5 h2 {
		color: #fff;
	}
	.section-5 .list {
		color: #fff;
		display: flex;
		justify-content: space-evenly;
		flex-wrap: wrap;
	}
	.section-5 .list-item {
		width: 30%;
		display: flex;
		margin-bottom: 20px;
		text-align: left;
		font-size: 20px;
		font-weight: 600;
		position: relative;
	}
	.section-5 .list .text {
		text-indent: 30px;
	}
	.section-5 .icon {
		position: absolute;
		left: 0;
		top: 0;
		color: #43a898;
		font-size: 25px;
	}
	
	.section-6 .image {
		background-image: url(<?php echo get_template_directory_uri().'/assets/images/spiker.jpg' ?>);
		background-repeat: no-repeat;
		background-position: center;
		background-size: contain;
		width: 100%;
		height: 820px;
	}
	.section-6 .text {
		position: relative;
		margin-bottom: 30px;
	}
	.section-6 .text:after {
		content: '';
		display: block;
		width: 40px;
		height: 3px;
		background: #81164e;
		position: absolute;
		bottom: -10px;
		left: 50%;
		transform: translateX(-50%);
	}
	
	
	.section-7 {
		position: relative;
		color: #fff;
	}
	.section-7 .bg {
		background: url(<?php echo get_template_directory_uri().'/assets/images/img-2.jpg' ?>);
		background-size: 100%;
		background-position: center;
		background-attachment: fixed;
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		filter: brightness(30%);
		z-index: -1;
	}
	.section-7 form {
		display: flex;
		flex-direction: column;
		align-items: center;
		padding-top: 30px;
	}
	.section-7 form input  {
		padding-left: 10px;
		margin-bottom: 10px;
		width: 350px;
		height: 40px;
		background: #fff;
		outline: none;
		border: 0;
		border-radius: 5px;
		color: #000;
	}
	.section-7 input[type="submit"] {
		background: #81164e;
		color: #fff;
	}
	.section-7 .reg-block {
		margin-top: 30px;
		display: flex;
		align-items: center;
		background: <?php echo get_theme_mod('block5_background') ?>;
		padding: 20px;
		text-align: left;
	}
	.section-7 .icon {
		font-size: 50px;
		margin-right: 20px;
	}
	.section-7 h4 {
		font-weight: 600;
		font-size: 30px;
	}
	.section-8 {
		padding-bottom: 20px;
	}
	.section-8 .blocks {
		display: flex;
		justify-content: center;
		align-items: center;
		margin-bottom: 30px;
	}
	.section-8 .info {
		margin-left: 40px;
		display: flex;
		flex-direction: column;
		align-items: flex-start;
	}
	.section-8 .info > div {
		border-bottom: 1px solid #ccc;
		width: 100%;
		text-align: left;
		padding: 15px 0;
	}
	.section-8 .info i {
		margin-right: 20px;
		color: #43a898;
		font-size: 30px;
	}
	.section-8 .number {
		font-size: 25px;
	}
	
	@media (max-width: 768px) {
		section {
			padding: 30px 15px;
		}
		.section-8 .blocks {
			flex-direction: column;
		}
		.section-8 iframe {
			width: 100%!important;
		}
		.section-5 .list {
			flex-direction: column;
		}
		.section-5 .list-item {
			width: 100%;
			flex-direction: column;
		}
		.section-7 .reg-block {
			width: 100%;
			margin: 30px auto 0;
			flex-direction: column;
			text-align: center;
		}
		.section-8 .map {
			width: 100%;
			margin-bottom: 30px;
		}
		.section-8 .info {
			margin-left: 0;
		}
		.section-6 .text+p {
			width: 100%;
		}
		.section-6 .image {
			max-height: 300px;
		}
		.progress-block, .progress {
			width: 100%;
		}
		.section-3 .list {
			flex-direction: column;
		}
		.section-3 .list-item {
			width: 100%;
		}
		.section-3 .image {
			max-height: 300px;
		}
		.section-3 .bg,
		.section-5 .bg {
			-webkit-background-size: cover;
			background-size: cover;
		}
		.section-7 form input {
			width: 100%;
		}
		.section-7 h4 {
			font-size: 20px;
		}
		.section-3 .icon {
			width: 35px;
			height: 35px;
		}
		.navbar-toggle {
			margin-right: 0!important;
		}
	}

</style>