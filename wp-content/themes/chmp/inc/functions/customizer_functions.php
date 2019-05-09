<?php

add_action('customize_register', function($wp_customize){
	$wp_customize->add_section('global_chmp', array(
			'title'       => '-> Основные настройки <-',
			'description' => 'Настройки',
			'priority'    => 11,
		)
	);
	
	$wp_customize->add_setting('main_color', array(
		'default'           => '#fdf6ea',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'main_color',
			array(
				'label'   => 'Основной цвет сайта',
				'section' => 'global_chmp',
				'setting' => 'main_color',
			)
		)
	);
	
	$wp_customize->add_setting('main_color_text', array(
		'default'           => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'main_color_text',
			array(
				'label'   => 'Основной цвет теста сайта',
				'section' => 'global_chmp',
				'setting' => 'main_color_text',
			)
		)
	);
	
	
	
	
	
	$wp_customize->add_setting('global_mail',
		array('default' => 'dudavx85@mail.com')
	);
	
	$wp_customize->add_control('global_mail', array(
			'label'   => 'E-mail для почты',
			'section' => 'global_chmp',
			'type'    => 'text',
		)
	);
	
	//-------------------------------------------------------
	$wp_customize->add_section('menu_chmp', array(
			'title'       => '-> Меню <-',
			'description' => 'Настройки цвета МорякиИнедвижимость',
			'priority'    => 11,
		)
	);
	
	
	
	$wp_customize->add_setting('nav_background', array(
		'default'           => '#fdf6ea',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nav_background',
			array(
				'label'   => 'Цвет меню',
				'section' => 'menu_chmp',
				'setting' => 'nav_background',
			)
		)
	);
	
	$wp_customize->add_setting('nav_color', array(
		'default'           => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nav_color',
			array(
				'label'   => 'Цвет пунктов меню',
				'section' => 'menu_chmp',
				'setting' => 'nav_color',
			)
		)
	);
	
	$wp_customize->add_setting('menu1',
		array('default' => 'Главная')
	);
	
	$wp_customize->add_control('menu1', array(
			'label'   => 'Пункт меню №1',
			'section' => 'menu_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('menu2',
		array('default' => 'Кто спикер')
	);
	
	$wp_customize->add_control('menu2', array(
			'label'   => 'Пункт меню №2',
			'section' => 'menu_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('menu3',
		array('default' => 'О чем')
	);
	
	$wp_customize->add_control('menu3', array(
			'label'   => 'Пункт меню №3',
			'section' => 'menu_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('menu4',
		array('default' => 'Закащать')
	);
	
	$wp_customize->add_control('menu4', array(
			'label'   => 'Пункт меню №4',
			'section' => 'menu_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('menu5',
		array('default' => 'Контакты')
	);
	
	$wp_customize->add_control('menu5', array(
			'label'   => 'Пункт меню №5',
			'section' => 'menu_chmp',
			'type'    => 'text',
		)
	);
	
	$wp_customize->add_setting('menu6',
		array('default' => 'Контакты')
	);
	
	$wp_customize->add_control('menu6', array(
			'label'   => 'Пункт меню №6',
			'section' => 'menu_chmp',
			'type'    => 'text',
		)
	);
	
	
	
	$wp_customize->add_setting('nav_brand_color', array(
		'default'           => '#00000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nav_brand_color',
			array(
				'label'   => 'Цвет названия в меню',
				'section' => 'menu_chmp',
				'setting' => 'nav_brand_color',
			)
		)
	);
	
	$wp_customize->add_setting('logo_text',
		array('default' => 'Моряки и недвижимость')
	);
	
	$wp_customize->add_control('logo_text', array(
			'label'   => 'Название в меню',
			'section' => 'menu_chmp',
			'type'    => 'text',
		)
	);
	//------------------------------------------------------------
	$wp_customize->add_section('main_chmp', array(
			'title'       => '-> Блок №1 <-',
			'description' => 'Настройки первого блока',
			'priority'    => 11,
		)
	);
	$wp_customize->add_setting('block1_background_color', array(
		'default'           => '#243156',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'block1_background_color',
			array(
				'label'   => 'Задний цвет текста на видео',
				'section' => 'main_chmp',
				'setting' => 'block1_background_color',
			)
		)
	);
	
	$wp_customize->add_setting('block_on_video_text',
		array('default' => 'Высшая школа экономики и управления —Трамплин к яркой и успешной карьере')
	);
	
	$wp_customize->add_control('block_on_video_text', array(
			'label'   => 'Текст на видео',
			'section' => 'main_chmp',
			'type'    => 'text',
		)
	);
	
	$wp_customize->add_setting('block_under_video_text_main',
		array('default' => 'КУДА БУДЕМ ПОГРУЖАТЬСЯ?')
	);
	
	$wp_customize->add_control('block_under_video_text_main', array(
			'label'   => 'Текст под видео 1',
			'section' => 'main_chmp',
			'type'    => 'text',
		)
	);
	
	$wp_customize->add_setting('block_under_video_text',
		array('default' => 'Будем исследовать подводную часть «айсберга маркетингового процесса»')
	);
	
	$wp_customize->add_control('block_under_video_text', array(
			'label'   => 'Текст под видео 2',
			'section' => 'main_chmp',
			'type'    => 'text',
		)
	);
	//-------------------------------------------------------------------------
	
	$wp_customize->add_section('block2_chmp', array(
			'title'       => '-> Блок №2 <-',
			'description' => 'Настройки блока №2',
			'priority'    => 11,
		)
	);
	
	$wp_customize->add_setting('block2_main_text',
		array('default' => 'РАЗБЕРЁМ ТАКИЕ АКТУАЛЬНЫЕ ВОПРОСЫ, КАК:')
	);
	
	$wp_customize->add_control('block2_main_text', array(
			'label'   => 'Главный текст',
			'section' => 'block2_chmp',
			'type'    => 'text',
		)
	);
	
	
	
	
	
	
	$wp_customize->add_setting('block2_text1',
		array('default' => '3 главных маркетинговых тренда текущего года')
	);
	
	$wp_customize->add_control('block2_text1', array(
			'label'   => 'Пункт',
			'section' => 'block2_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('block2_text2',
		array('default' => '3 главных маркетинговых тренда текущего года')
	);
	
	$wp_customize->add_control('block2_text2', array(
			'label'   => 'Пункт',
			'section' => 'block2_chmp',
			'type'    => 'text',
		)
	);
	
	$wp_customize->add_setting('block2_text3',
		array('default' => '3 главных маркетинговых тренда текущего года')
	);
	$wp_customize->add_control('block2_text3', array(
			'label'   => 'Пункт',
			'section' => 'block2_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('block2_text4',
		array('default' => '3 главных маркетинговых тренда текущего года')
	);
	
	$wp_customize->add_control('block2_text4', array(
			'label'   => 'Пункт',
			'section' => 'block2_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('block2_text5',
		array('default' => '3 главных маркетинговых тренда текущего года')
	);
	
	$wp_customize->add_control('block2_text5', array(
			'label'   => 'Пункт',
			'section' => 'block2_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('block2_text6',
		array('default' => '3 главных маркетинговых тренда текущего года')
	);
	
	$wp_customize->add_control('block2_text6', array(
			'label'   => 'Пункт',
			'section' => 'block2_chmp',
			'type'    => 'text',
		)
	);
	
	//--------------------------------------------------------------------------
	
	$wp_customize->add_section('block3_chmp', array(
			'title'       => '-> Блок №3 <-',
			'description' => 'Настройки блока №2',
			'priority'    => 11,
		)
	);
	
	$wp_customize->add_setting('block3_main_text',
		array('default' => 'ЖИВОЙ МАСТЕР-КЛАСС')
	);
	
	$wp_customize->add_control('block3_main_text', array(
			'label'   => 'Пункт',
			'section' => 'block3_chmp',
			'type'    => 'text',
		)
	);
	
	
	
	
	$wp_customize->add_setting('block3_punkt',
		array('default' => 'Дата мероприятия')
	);
	
	$wp_customize->add_control('block3_punkt', array(
			'label'   => 'Пункт1',
			'section' => 'block3_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('block3_punkt1',
		array('default' => '29.05.2019')
	);
	
	$wp_customize->add_control('block3_punkt1', array(
			'label'   => 'Пункт2',
			'section' => 'block3_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('block3_punkt2',
		array('default' => 'Свободных мест')
	);
	
	$wp_customize->add_control('block3_punkt2', array(
			'label'   => 'Пункт3',
			'section' => 'block3_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('block3_punkt3',
		array('default' => '15')
	);
	
	$wp_customize->add_control('block3_punkt3', array(
			'label'   => 'Пункт4',
			'section' => 'block3_chmp',
			'type'    => 'text',
		)
	);
	
	
	$wp_customize->add_setting('block3_bar',
		array('default' => 'Мест забронировано - 75%')
	);
	
	$wp_customize->add_control('block3_bar', array(
			'label'   => 'Текст прогресс бара',
			'section' => 'block3_chmp',
			'type'    => 'text',
		)
	);
	
	$wp_customize->add_setting('block3_bar_size',
		array('default' => '75')
	);
	
	$wp_customize->add_control('block3_bar_size', array(
			'label'   => 'Заполненность прогресс бара в %',
			'section' => 'block3_chmp',
			'type'    => 'text',
		)
	);
	
	$wp_customize->add_setting('block3_bar_color', array(
		'default'           => '#00000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'block3_bar_color',
			array(
				'label'   => 'Цвет прогресс бара',
				'section' => 'block3_chmp',
				'setting' => 'nav_brand_color',
			)
		)
	);
	
	
	//------------------------------------------------------
	$wp_customize->add_section('block4_chmp', array(
			'title'       => '-> Блок №4 <-',
			'description' => 'Настройки блока №2',
			'priority'    => 11,
		)
	);
	$wp_customize->add_setting('block4_main_text',
		array('default' => 'ТРЕНИНГ «МАРКЕТИНГ 3.0 ПОГРУЖЕНИЕ»')
	);
	
	$wp_customize->add_control('block4_main_text', array(
			'label'   => 'Главный текст',
			'section' => 'block4_chmp',
			'type'    => 'text',
		)
	);
	
	
	
	
	
	
	
	$wp_customize->add_setting('block4_text1',
		array('default' => '3 главных маркетинговых тренда текущего года')
	);
	
	$wp_customize->add_control('block4_text1', array(
			'label'   => 'Пункт1',
			'section' => 'block4_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('block4_text2',
		array('default' => '3 главных маркетинговых тренда текущего года')
	);
	
	$wp_customize->add_control('block4_text2', array(
			'label'   => 'Пункт2',
			'section' => 'block4_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('block4_text3',
		array('default' => '3 главных маркетинговых тренда текущего года')
	);
	
	$wp_customize->add_control('block4_text3', array(
			'label'   => 'Пункт3',
			'section' => 'block4_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('block4_text4',
		array('default' => '3 главных маркетинговых тренда текущего года')
	);
	
	$wp_customize->add_control('block4_text4', array(
			'label'   => 'Пункт4',
			'section' => 'block4_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('block4_text5',
		array('default' => '3 главных маркетинговых тренда текущего года')
	);
	
	$wp_customize->add_control('block4_text5', array(
			'label'   => 'Пункт5',
			'section' => 'block4_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('block4_text6',
		array('default' => '3 главных маркетинговых тренда текущего года')
	);
	
	$wp_customize->add_control('block4_text6', array(
			'label'   => 'Пункт6',
			'section' => 'block4_chmp',
			'type'    => 'text',
		)
	);
	//--------------------------------------------------------
	
	$wp_customize->add_section('block5_chmp', array(
			'title'       => '-> Блок №5 <-',
			'description' => 'Настройки блока №2',
			'priority'    => 11,
		)
	);
	$wp_customize->add_setting('block5_main',
		array('default' => 'СПИКЕР')
	);
	
	$wp_customize->add_control('block5_main', array(
			'label'   => 'Название блока',
			'section' => 'block5_chmp',
			'type'    => 'text',
		)
	);
	
	
	
	$wp_customize->add_setting('block5_name',
		array('default' => 'АЛЕКСЕЙ КОШЕЛЕВ')
	);
	
	$wp_customize->add_control('block5_name', array(
			'label'   => 'Имя спикера',
			'section' => 'block5_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('block5_text',
		array('default' => 'Генеральный директор Pro Business Cente')
	);
	
	$wp_customize->add_control('block5_text', array(
			'label'   => 'Должность',
			'section' => 'block5_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('block5_desc',
		array('default' => 'Генеральный директор Центра бизнес-технологий Pro Business Center. Опытный директор проектов / программ, маркетолог, бизнес-аналитик. Сертификат Международной Ассоциации Управления проектами (IPMA), уровень A (Project Director, IPMA® Level А), сертификат Торгово-Промышленной Палаты Украины, квалификационный стандарт Бизнес-тренер (ТПП). Certified ScrumMaster® (Scrum Alliance), Certified Scrum Product Owner® (Scrum Alliance), сертифицированный НЛП-практик. В бизнесе — 20 лет. В маркетинге — 15 лет. В бизнес-обучении — 8 лет. Тренер-консультант UNDP (Программа Развития ООН). Советник президента корпорации Познякижилстрой. Автор и методолог программы инкубации конкурса стартапов «Leadership», ежегодно проводимого Киевским молодежным центром (Киевская городская государственная администрация). Имеет большой опыт реализации девелоперских и маркетинговых проектов, проектов организационного развития, как на национальном, так и на международном уровне. Реализовал и запустил ряд самостоятельных проектов, в т.ч. успешных стартапов, с нуля и под ключ.')
	);
	
	$wp_customize->add_control('block5_desc', array(
			'label'   => 'Описание',
			'section' => 'block5_chmp',
			'type'    => 'text',
		)
	);
	//-----------------------------------------------------
	
	//------------------------------------------------------
	$wp_customize->add_section('block5_chmp', array(
			'title'       => '-> Блок №5 <-',
			'description' => 'Настройки блока №2',
			'priority'    => 11,
		)
	);
	$wp_customize->add_setting('block5_main_text',
		array('default' => 'ЗАРЕГИСТРИРУЙСЯ СЕЙЧАС.')
	);
	
	$wp_customize->add_control('block5_main_text', array(
			'label'   => 'Главный текст',
			'section' => 'block5_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('block5_text',
		array('default' => 'КОЛИЧЕСТВО МЕСТ ОГРАНИЧЕНО!')
	);
	
	$wp_customize->add_control('block5_text', array(
			'label'   => 'Текст',
			'section' => 'block5_chmp',
			'type'    => 'text',
		)
	);
	
	$wp_customize->add_setting('block5_text_button',
		array('default' => 'ЗАБРОНИРОВАТЬ МЕСТО')
	);
	
	$wp_customize->add_control('block5_text_button', array(
			'label'   => 'Текст кнопки',
			'section' => 'block5_chmp',
			'type'    => 'text',
		)
	);
	
	$wp_customize->add_setting('block5_text_button1',
		array('default' => 'РЕГИСТРАЦИОННЫЙ ВЗНОС — 200 грн.')
	);
	
	$wp_customize->add_control('block5_text_button1', array(
			'label'   => 'Текст под кнопкой 1',
			'section' => 'block5_chmp',
			'type'    => 'text',
		)
	);
	
	$wp_customize->add_setting('block5_text_button2',
		array('default' => 'Внесение регистрационного взноса необходимо для бронирования места на мастер-классе.')
	);
	
	$wp_customize->add_control('block5_text_button2', array(
			'label'   => 'Текст под кнопкой 2',
			'section' => 'block5_chmp',
			'type'    => 'text',
		)
	);
	
	
	$wp_customize->add_setting('block5_background', array(
		'default'           => '#43a898',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'block5_background',
			array(
				'label'   => 'Цвет блока',
				'section' => 'block5_chmp',
				'setting' => 'block5_background',
			)
		)
	);
	//-----------------------------------------------------
	
	//------------------------------------------------------
	$wp_customize->add_section('contact_chmp', array(
			'title'       => '-> Контакты <-',
			'description' => 'Настройки блока №2',
			'priority'    => 11,
		)
	);
	$wp_customize->add_setting('contact_main_text',
		array('default' => 'МЕСТО ПРОВЕДЕНИЯ')
	);
	
	$wp_customize->add_control('contact_main_text', array(
			'label'   => 'Главный текст',
			'section' => 'contact_chmp',
			'type'    => 'text',
		)
	);
	
	
	
	
	$wp_customize->add_setting('contact_number1',
		array('default' => '044 499 72 86')
	);
	
	$wp_customize->add_control('contact_number1', array(
			'label'   => 'Номер телефона 1',
			'section' => 'contact_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('contact_number2',
		array('default' => '044 499 72 86')
	);
	
	$wp_customize->add_control('contact_number2', array(
			'label'   => 'Номер телефона 2',
			'section' => 'contact_chmp',
			'type'    => 'text',
		)
	);
	
	
	$wp_customize->add_setting('contact_addres',
		array('default' => 'г. Киев, ул. В. Василевской, 7 офис 602')
	);
	
	$wp_customize->add_control('contact_addres', array(
			'label'   => 'Место',
			'section' => 'contact_chmp',
			'type'    => 'text',
		)
	);
	
	$wp_customize->add_setting('contact_mail',
		array('default' => 'info@probusiness.center')
	);
	
	$wp_customize->add_control('contact_mail', array(
			'label'   => 'Место',
			'section' => 'contact_chmp',
			'type'    => 'text',
		)
	);
	
	
	$wp_customize->add_setting('contact_insta',
		array('default' => 'https://www.instagram.com/ivan_chaika_')
	);
	
	$wp_customize->add_control('contact_insta', array(
			'label'   => 'instagram',
			'section' => 'contact_chmp',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting('contact_facebook',
		array('default' => 'https://www.facebook.com/messages/t/chayka.ivan8')
	);
	
	$wp_customize->add_control('contact_facebook', array(
			'label'   => 'facebook',
			'section' => 'contact_chmp',
			'type'    => 'text',
		)
	);
	
	
	
	
	
	
	
	
});
