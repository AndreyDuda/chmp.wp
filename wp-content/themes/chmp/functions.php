<?php

include_once (__DIR__ . '/inc/functions/customizer_functions.php');
include_once (__DIR__ . '/inc/functions/admin_functions.php');

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
		wp_enqueue_script('scripts-js', get_template_directory_uri() . '/assets/js/scripts.js');
		
		
	});
	
	
});















add_action('wp_ajax_sendmail', 'ajax_send_mail');
add_action('wp_ajax_nopriv_sendmail', 'ajax_send_mail');

function ajax_send_mail() {
	
	$to = get_theme_mod('global_mail');
	$subject = "New Order";
	
	$name = isset($_POST['name'])? $_POST['name']:'';
	$phone = isset($_POST['phone'])? $_POST['phone']:'';
	
	$message = '<table>
					<tbody>
						<tr>
							<td><b>Имя</b>:</td><td>'. $name .'</td>
						</tr>
						<tr>
							<td><b>Телефон</b>:</td><td>'. $phone .'</td>
						</tr>
					</tbody>
				</table>';
	echo $message ;
	echo $to ;
	$header = "From:" .  get_theme_mod('global_mail') . " \r\n";
	/*$header .= "Cc:coffee-love@coffee-love.com.ua \r\n";*/
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html; charset='utf-8';\r\n";
	
	$defaults = array(
		'post_status'           => 'publish', // черновик
		'post_type'             => 'order_coffee_love', // тип - запись блога (пост)
		'post_author'           => '1', // ID автора
		'ping_status'           => get_option('default_ping_status'),
		'post_parent'           => 0, // родитель
		'menu_order'            => 0, // порядок в меню
		'to_ping'               =>  '',
		'pinged'                => '',
		'post_password'         => '', // без пароля
		'guid'                  => '',
		'post_content_filtered' => '',
		'post_excerpt'          => '', // анонс
		'import_id'             => 0,
		'post_title'            => $name . ' | ' . $phone . ' | ',
		'post_content'          => $message
	);
	
	wp_insert_post( $defaults);
	
	$retval = mail($to,$subject,$message,$header);
	
	if( $retval == true ) {
		echo "Message sent successfully...";
	}else {
		echo "Message could not be sent...";
	}
	
	wp_die();
}
