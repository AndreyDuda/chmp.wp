<?php

add_action('customize_register', function($wp_customize){
	$wp_customize->add_section('moriki', array(
			'title'       => '-> Все настройки <-',
			'colors'       => 'green',
			'description' => 'Настройки цвета МорякиИнедвижимость',
			'priority'    => 11,
		)
	);
	
	$wp_customize->add_setting('body_background', array(
		'default'           => '#007bff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'body_background',
			array(
				'label'   => 'Основной цвет страницы',
				'section' => 'moriki',
				'setting' => 'body_background',
			)
		)
	);
	
	$wp_customize->add_setting('nav_color', array(
		'default'           => '#007bff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nav_color',
			array(
				'label'   => 'Цвет пунктов меню',
				'section' => 'moriki',
				'setting' => 'nav_color',
			)
		)
	);
	
	$wp_customize->add_setting('nav_color_hover', array(
		'default'           => '#007bff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nav_color_hover',
			array(
				'label'   => 'Цвет пунктов меню при наведении',
				'section' => 'moriki',
				'setting' => 'nav_color_hover',
			)
		)
	);
	
	$wp_customize->add_setting('logo_text',
		array('default' => 'Моряки и недвижимость')
	);
	
	$wp_customize->add_control('logo_text', array(
			'label'   => 'Надпись в меню',
			'section' => 'moriki',
			'type'    => 'text',
		)
	);
	
	$wp_customize->add_setting('logo_text_color', array(
		'default'           => '#007bff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'logo_text_color',
			array(
				'label'   => 'Цвет надписи в меню',
				'section' => 'moriki',
				'setting' => 'logo_text_color',
			)
		)
	);
	
	
	
	
	$wp_customize->add_setting('menu1',
		array('default' => 'Главная')
	);
	
	$wp_customize->add_control('menu1', array(
			'label'   => 'Название пункта меню №1',
			'section' => 'moriki',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('menu2',
		array('default' => 'Кто спикер')
	);
	
	$wp_customize->add_control('menu2', array(
			'label'   => 'Название пункта меню №2',
			'section' => 'moriki',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('menu3',
		array('default' => 'О чем')
	);
	
	$wp_customize->add_control('menu3', array(
			'label'   => 'Название пункта меню №3',
			'section' => 'moriki',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('menu4',
		array('default' => 'Заказать')
	);
	
	$wp_customize->add_control('menu4', array(
			'label'   => 'Название пункта меню №4',
			'section' => 'moriki',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('menu5',
		array('default' => 'Котакты')
	);
	
	$wp_customize->add_control('menu5', array(
			'label'   => 'Название пункта меню №5',
			'section' => 'moriki',
			'type'    => 'text',
		)
	);
	
	
	
	//--------------------------------------------------------------
	
	$wp_customize->add_setting('nav_background', array(
		'default'           => '#007bff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nav_background',
			array(
				'label'   => 'Цвет меню',
				'section' => 'moriki',
				'setting' => 'nav_background',
			)
		)
	);
	
	$wp_customize->add_setting('h_color', array(
		'default'           => '#007bff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'h_color',
			array(
				'label'   => 'Цвет ЗАГАЛОВКОВ на странице',
				'section' => 'moriki',
				'setting' => 'h_color',
			)
		)
	);
	
	$wp_customize->add_setting('text_color_body', array(
		'default'           => '#007bff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'text_color_body',
			array(
				'label'   => 'Цвет текста на странице',
				'section' => 'moriki',
				'setting' => 'text_color_body',
			)
		)
	);

	
});
