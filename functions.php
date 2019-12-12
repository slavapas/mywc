<?php

function load_styles() {
	// add styles
	wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style('main_css', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'load_styles');

function load_scripts() {
	// add scripts
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js' );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', 1, true );
}
add_action('wp_enqueue_scripts', 'load_scripts');


// add Menu support
add_theme_support('menus');

// add Theme support Thumbnails
add_theme_support('post-thumbnails');

// register menus
register_nav_menus(
	array(
		'top-menu'=> __('Top Menu', 'theme'),
		'bottop-menu'=> __('Bottom Menu', 'theme')
	)
);

// add image size
add_image_size('post_image', 1100, 750, true);

// add widget
register_sidebar(
	array(
		'name'          =>'Page Sidebar',
		'id'            =>'page-sidebar',
		'class'         =>'',
		'before-title'  =>'<h4>',
		'after-title'   =>'</h4>'
	)
);

