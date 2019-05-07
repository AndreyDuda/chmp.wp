<?php

include_once (__DIR__ . '/inc/functions/customizer_functions.php');

function get_navigation() {
	$templates = array();
	$templates[] = 'navigation.php';
	
	locate_template($templates, true);
}

add_action('wp_head', function () {
	$vars = array(
		'ajax_url' => admin_url('admin-ajax.php')
	);
	
	echo "<script>window.wp = " . json_encode($vars) . "</script>";
});

add_action('wp_enqueue_scripts', function (){
	wp_enqueue_style('bootstrap_css', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');
	wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
	
	add_action('wp_footer', function (){
		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js');
		
		
	});
	
	
});