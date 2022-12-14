<?php
/**
 * Theme My Theme
 * @package myTheme
 */

add_theme_support('post-thumbnails');

require_once('wp-bootstrap-navwalker.php');

function get_style_files(): void {
	wp_enqueue_style( "bootstrap-css", get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( "styleCss-css", get_template_directory_uri() . '/css/styleCss.css' );
}


function get_script_files(): void {
	wp_enqueue_script( "main-js", get_template_directory_uri() . '/js/main.js', array(), false, true );
	wp_enqueue_script( "bootstrap-js", get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true );

}

/**
 * @return void
 * Created By @M7MMAD-OMAR
 * Added Nav Menu
 */
function mytheme_register_nav_menu() {
	register_nav_menus( array(
		'header-menu' => 'Header Bar',
		'footer-menu' => 'Footer Bar',
	) );
}

function myNav_menue() {
	wp_nav_menu( array(
			'theme_location' => 'header-menu',
			'menu_class'     => 'nav navbar-nav',
			'container' => false,
			'depth' => 2,
			'walker' => new wp_bootstrap_navwalker,
		)
	);
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
