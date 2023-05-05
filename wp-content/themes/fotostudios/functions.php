<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts',function() {
	wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com');
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
wp_enqueue_style( 'fonts2', 'https://fonts.googleapis.com/css2?family=Palanquin&display=swap');
wp_enqueue_style( 'fonts3', 'https://fonts.googleapis.com/css2?family=Comforter+Brush&display=swap');
	wp_enqueue_style( 'reset', get_template_directory_uri() .'/assets/css/reset.css');
	wp_enqueue_style( 'slick', get_template_directory_uri() .'/assets/css/slick.css');
	wp_enqueue_style( 'magnific', get_template_directory_uri(). '/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );


	wp_enqueue_script( 'magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );
	});

	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	 register_nav_menus( array( 'menu-1' => 'menu_top', 'menu-2' => 'service_menu' ) );




	add_filter( 'upload_mimes', 'svg_upload_allow' );

	# Добавляет SVG в список разрешенных для загрузки файлов.
	function svg_upload_allow( $mimes ) {
		$mimes['svg']  = 'image/svg+xml';

		return $mimes;
	}

	add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

	# Исправление MIME типа для SVG файлов.
	function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

		// WP 5.1 +
		if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
			$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
		else
			$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

		// mime тип был обнулен, поправим его
		// а также проверим право пользователя
		if( $dosvg ){

			// разрешим
			if( current_user_can('manage_options') ){

				$data['ext']  = 'svg';
				$data['type'] = 'image/svg+xml';
			}
			// запретим
			else {
				$data['ext'] = $type_and_ext['type'] = false;
			}

		}

		return $data;
	}

	function my_customize_register( $wp_customize ) {
    $wp_customize->add_setting('header_logo', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'header_logo', array(
        'section' => 'title_tagline',
        'label' => 'Логотип'
    )));

    $wp_customize->selective_refresh->add_partial('header_logo', array(
        'selector' => '.header-logo',
        'render_callback' => function() {
            $logo = get_theme_mod('header_logo');
            $img = wp_get_attachment_image_src($logo, 'full');
            if ($img) {
                return '<img src="' . $img[0] . '" alt="">';
            } else {
                return '';
            }
        }
    ));
}
add_action( 'customize_register', 'my_customize_register' );

 ?>
