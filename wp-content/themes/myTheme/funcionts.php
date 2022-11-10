<?php


function get_style_files(): void {
	wp_enqueue_style("style-css",  get_template_directory_uri() . '/css/styleCss.css');
}


function get_script_files(): void {
	wp_enqueue_script("main-js", get_template_directory_uri() . '/js/mainJs.js', array(), false, true);
}
