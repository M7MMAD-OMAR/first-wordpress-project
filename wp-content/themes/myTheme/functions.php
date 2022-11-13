<?php
/**
 * Theme My Theme
 * @package myTheme
 */
echo '<pre>';

print_r(get_template_directory_uri())   ;

echo '</pre>';



function get_style_files(): void {
	wp_enqueue_style("style-css",  get_template_directory_uri() . '/css/styleCss.css');
	wp_enqueue_style("styleCss-css", get_template_directory_uri() . '/style.css' );
}


function get_script_files(): void {
	wp_enqueue_script("main-js", get_template_directory_uri() . '/js/main.js', array(), false, true);
	wp_enqueue_script("mainJs-js", get_template_directory_uri() . '/js/mainJs.js', array(), false, true);
}


add_action('wp_enqueue_scripts', 'get_style_files');
add_action('wp_enqueue_scripts', 'get_script_files');