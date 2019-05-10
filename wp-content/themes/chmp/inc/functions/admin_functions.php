<?php
add_action('admin_menu', function (){
	add_menu_page(
		'ГЛАВНОЕ МЕНЮ',
		'chmp',
		'edit_others_posts',
		'chmp',
		function (){},
		get_template_directory_uri() . '/assets/images/favicon.ico' ,
		3);
	
	
});
add_filter( 'option_page_capability_'.'my_page_slug', 'my_page_capability' );

function my_page_capability( $capability ) {
	return 'edit_others_posts';
}


register_post_type('order_coffee_love', array(
	'labels' => array(
		'name'               => 'Заказы', // основное название для типа записи
		'singular_name'      => 'Заказы', // название для одной записи этого типа
		'view_item'          => 'Смотреть заказ', // для просмотра записи этого типа.
		'search_items'       => 'Искать заказ', // для поиска по этим типам записи
		'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
		'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
		'parent_item_colon'  => '', // для родителей (у древовидных типов)
		'menu_name'          => 'Заказы', // название меню
	),
	'public'              => true,
	'show_in_menu'        => 'chmp',
	'menu_position'       => 10,
	'menu_icon'           => 'dashicons-format-quote',
	'hierarchical'        => false,
	'supports'            => array('title', 'editor'),
	'show_in_nav_menus'   => true,


));


function remove_menus(){
	//remove_menu_page( 'index.php/dashboard' );                  //Консоль
	remove_menu_page( 'edit.php' );
	
	remove_menu_page( 'edit.php?post_type=page' );    //Страницы
	//remove_menu_page( 'nav-menus.php' );
	
	remove_menu_page( 'edit-comments.php' );          //Комментарии
	//remove_menu_page( 'users.php' );                  //Пользователи
	//remove_menu_page( 'tools.php' );                  //Инструменты
	//remove_menu_page( 'options-general.php' );         //Настройки
	
}
add_action( 'admin_menu', 'remove_menus' );