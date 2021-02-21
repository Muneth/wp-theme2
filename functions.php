<?php

	function wpdocs_theme_name_scripts() {
		wp_enqueue_style( 'style-name', get_stylesheet_uri() );
		wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/vendor/jquery.js');
		wp_enqueue_script( 'script-name', get_template_directory_uri() . 'js/vendor/what-input.js');
		wp_enqueue_script( 'script-name', get_template_directory_uri() . 'js/vendor/foundation.js');
		wp_enqueue_script( 'script-name', get_template_directory_uri() . 'js/app.js');
		wp_enqueue_script( 'script-name', get_template_directory_uri() . 'js/burger.js');
	}

	add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


	// Theme Support
	function fc_theme_support(){

		// Custom Logo
		add_theme_support('custom-logo');

		// Add Featured Image Support
		add_theme_support('post-thumbnails');
		add_image_size('home-thumb', 50, 50);
		add_image_size('homepage-thumb', 715, 449, true );

		// Nav Menus
		register_nav_menus(array(
			'primary'	=> __('Primary Menu')
		));
	}

	add_action('after_setup_theme', 'fc_theme_support');

	// Widget Locations

function fc_init_widgets($id){
	register_sidebar(array(
		'name' 	=> 'Sidebar',
		'id' 	=> 'sidebar',
		'before_widget'	=> '<div class="sidebar-widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));

  register_sidebar(array(
		'name' 	=> 'Footer 1',
		'id' 	=> 'footer1',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));

  register_sidebar(array(
		'name' 	=> 'Footer 2',
		'id' 	=> 'footer2',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));

  register_sidebar(array(
		'name' 	=> 'Footer 3',
		'id' 	=> 'footer3',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));

  register_sidebar(array(
		'name' 	=> 'Footer 4',
		'id' 	=> 'footer4',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));

}

add_action('widgets_init', 'fc_init_widgets');

	// Add Customizer functionality.
	
	require get_template_directory() . '/inc/customizer.php';