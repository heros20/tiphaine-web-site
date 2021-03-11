<?php
/**
 * blank_1 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blank_1
 */

if ( ! defined( '_S_VERSION' ) ) {

	define( '_S_VERSION', '1.0.1' );
}

if ( ! function_exists( 'blank_1_setup' ) ) :
	
	function blank_1_setup() {
		load_theme_textdomain( 'blank_1', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
    }
endif;
add_action( 'after_setup_theme', 'blank_1_setup' );


function blank_1_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blank_1_content_width', 640 );
}
add_action( 'after_setup_theme', 'blank_1_content_width', 0 );


function blank_1_scripts() {
	wp_enqueue_style( 'blank_1-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'font-awesome-style','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css', array(), _S_VERSION,);
	if(is_page(12)){
		wp_enqueue_style( 'blog-style', get_template_directory_uri().'/assets/css/blog.css', array(), _S_VERSION );
	} 
	if(is_page(13)){
		wp_enqueue_style( 'contact-style',get_template_directory_uri().'/assets/css/contact.css', array(), _S_VERSION );
	} 
	if(is_page(7)){
		wp_enqueue_style( 'flexslider-style',get_template_directory_uri().'/assets/flexslider/flexslider.css', array(), _S_VERSION);
		wp_enqueue_script( 'jquery-js','https://code.jquery.com/jquery-3.6.0.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'flexslider-js',get_template_directory_uri().'/assets/flexslider/jquery.flexslider-min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'main-js',get_template_directory_uri().'/assets/js/main.js', array(), _S_VERSION, true );
	}
	if(is_page(16)){
		wp_enqueue_style( 'page-style', get_template_directory_uri().'/assets/css/page.css', array(), _S_VERSION );
	}
		
	




	
	
	
}
add_action( 'wp_enqueue_scripts', 'blank_1_scripts' );