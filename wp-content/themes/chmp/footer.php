<section class="section-8" >
<div class="container">
	<div class="row">
		<h2>
			<?php echo get_theme_mod('contact_main_text') ?>
		</h2>
		<div class="blocks">
			<div class="map" >
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
					<a href="<?php echo get_theme_mod('contact_mail')?>"><?php echo get_theme_mod('contact_mail') ?></a>
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

</body>
<?php wp_footer();?>
</html>