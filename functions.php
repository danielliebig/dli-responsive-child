<?php
function my_admin_theme_style() {
   wp_enqueue_style('dli-admin-theme', get_stylesheet_directory_uri() . '/admin.css');
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');

function enqueue_dli_styles() {
	wp_enqueue_style(
		'dli-styles',
		get_stylesheet_directory_uri() . '/stylesheets/screen.css',
		array('responsive-style', 'responsive-media-queries', 'responsive-child-style')
	);
}

add_action( 'wp_enqueue_scripts', 'enqueue_dli_styles' );