<?php

// Add Scripts
function sl_add_scripts(){
	wp_enqueue_style('sl-main-style', plugins_url().'/social-links/css/style.css');
	wp_enqueue_script('sl-main-script', plugins_url().'/social-links/js/main.js');
}

add_action('wp_enqueue_scripts', 'sl_add_scripts');