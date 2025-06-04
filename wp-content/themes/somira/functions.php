<?php

function somira_theme_setup() {
    add_theme_support('menus'); 
	register_nav_menus(array(
        'primary' => __('Primary Menu', 'somira'),
    ));
	register_nav_menus([
		'footer_menu' => __('Footer Menu', 'somira'),
	]);
}
add_action('after_setup_theme', 'somira_theme_setup');
add_theme_support('post-thumbnails');

function somira_enqueue_assets() {
    wp_enqueue_script('jquery');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');
    wp_enqueue_style('somira-style', get_stylesheet_uri());
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
    wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/assets/js/custom.js');
}
add_action('wp_enqueue_scripts', 'somira_enqueue_assets');

function somira_enqueue_jquery() {
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'somira_enqueue_jquery');


function theme_register_menus() {
  register_nav_menus([
      'primary' => __('Primary Menu', 'your-theme-textdomain'),
      'footer_menu' => __('Footer Menu', 'your-theme-textdomain'),
  ]);
}
add_action('after_setup_theme', 'theme_register_menus');
add_theme_support('page-attributes');
add_action('wp_enqueue_scripts', function() {
    if (is_product()) {
        wc_enqueue_js('initZoom()'); // WooCommerce does this automatically
    }
});
