<?php


function get_style_files(): void {
	wp_enqueue_block_style("style-css", (array) (get_template_directory_uri() . 'css/styleCss.css') );
}


function get_js_files(): void {
	wp_enqueue_block_style("main-js", (array) (get_template_directory_uri() . 'js/mainJs.js') );
}


?>