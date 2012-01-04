<?php
/**
 * @package WordPress
 * @subpackage YOUR_THEME
 */

add_theme_support('automatic-feed-links');

/*

	Load up the scripts

*/

function envex_scripts(){
	
	if(is_admin()){ return; }
	
	wp_deregister_script('jquery');
	
	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js', false, '1.6.2');
	wp_enqueue_script('jquery');
	
	wp_register_script('nivo-slider', get_bloginfo('template_url') . '/inc/js/jquery.nivo.slider.pack.js', false, '1.0', true);
	wp_enqueue_script('nivo-slider');
	
	wp_register_script('main', get_bloginfo('template_url') . '/inc/js/main.js', false, '1.0', true);
	wp_enqueue_script('main');
	
}

add_action('init', 'envex_scripts');

/*

	The functions below are elements I use a lot, but not
	for every project. To use them, simply uncomment them!

*/

/*

	Menus


*/

/*

register_nav_menus(array(
	'main' => 'Main Menu',
	'footer' => 'Footer Menu'
));

*/

/*

	Widgets
	
*/

/*

register_sidebar(array(
	'name' => '',
	'id'  => ''
));

*/