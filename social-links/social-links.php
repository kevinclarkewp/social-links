<?php
/*
Plugin Name:  Social Links
Description:  Adds social icons with links to profiles Learning.
Plugin URI:   https://github.com/kevinclarkewp
Author:       Kevin Clarke
Version:      1.0
Text Domain:  social-links
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__) . '/includes/social-links-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__) . '/includes/social-links-class.php');

// Register Widget
function register_social_links(){
	register_widget('Social_Links_Widget');
}

add_action('widgets_init', 'register_social_links');
