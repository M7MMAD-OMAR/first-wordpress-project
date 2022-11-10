<?php


function style_files(): void {
	wp_enqueue_block_style("style-css", get_template_directory_uri() . 'css/styleCss.css');
}


?>