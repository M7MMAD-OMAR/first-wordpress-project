<?php
/**
 * Theme My Theme
 * @package myTheme
 */


function get_style_files(): void {
	wp_enqueue_style( "style-css", get_template_directory_uri() . '/css/styleCss.css' );
	wp_enqueue_style("bootstrap-css", get_template_directory_uri() . '/css/bootstrap.min.css');
}


function get_script_files(): void {
	wp_enqueue_script( "main-js", get_template_directory_uri() . '/js/main.js', array(), false, true );
	wp_enqueue_script("bootstrap-js", get_template_directory_uri() . '/js/bootstrap.min.js');

}


function mytheme_register_nav_menu() {
	register_nav_menu('primary-menu', __('Navigation Bar'));
}


/**
 * Add Actions in myTheme
 *
 * Added By @M7MMAD-OMAR
 *
 */
add_action( 'wp_enqueue_scripts', 'get_style_files' );
add_action( 'wp_enqueue_scripts', 'get_script_files' );


add_action( 'init', 'mytheme_register_nav_menu' );
