<?php

include_once('inc/class-wp-bootstrap-navwalker.php');

// Register Resources
function sanito_spa() {


	wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_register_style('owl-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_register_style('owl-theme-css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
	wp_register_style( 'stylesheet', get_stylesheet_uri() );

	wp_enqueue_style('owl-css');
	wp_enqueue_style('owl-theme-css');
	wp_enqueue_style( 'bootstrap-css' );
	wp_enqueue_style( 'stylesheet' );
	wp_enqueue_style( 'aos-css' );

	
	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.1', true );
	wp_register_script( 'owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.1', true );
	wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.1', true );


	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap-js' );
	wp_enqueue_script('owl-js');
	wp_enqueue_script('main-js');


}
add_action( 'wp_enqueue_scripts', 'sanito_spa' );

// Menus
add_action( 'after_setup_theme', 'register_nero_primary_menu' );
function register_nero_primary_menu() {
	register_nav_menus(array( 
		// 'home'		=> 	__( 'Home Menu', 'dox_pro' ),
		'primary'	=> 	__( 'Primary Menu', 'Sanito Spa' ),
		'footer'	=>	__( 'Footer Menu', 'Sanito Spa' )

	 ));
}



