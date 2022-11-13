<?php
/**
 * Theme My Theme
 * @package myTheme
 */


function get_style_files(): void {
	wp_enqueue_style( "style-css", get_template_directory_uri() . '/css/styleCss.css' );
}


function get_script_files(): void {
	wp_enqueue_script( "main-js", get_template_directory_uri() . '/js/main.js', array(), false, true );
}


function mytheme_register_nav_menu() {
	register_nav_menus( array(
		'primary_menu' => __( 'Primary Menu', 'text_domain' ),
		'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
	) );
}


/**
 * Add Actions in myTheme
 *
 * Added By @M7MMAD-OMAR
 *
 */
add_action( 'wp_enqueue_scripts', 'get_style_files' );
add_action( 'wp_enqueue_scripts', 'get_script_files' );


add_action( 'after_setup_theme', 'mytheme_register_nav_menu' );
