<?php

function somira_theme_setup()
{
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

function somira_enqueue_assets()
{
    wp_enqueue_script('jquery');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');
    wp_enqueue_style('somira-style', get_stylesheet_uri());
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('responsive-css', get_stylesheet_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
    wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/assets/js/custom.js');
    wp_localize_script('custom', 'my_ajax_obj', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'site_url' => get_site_url(),
    ));

}
add_action('wp_enqueue_scripts', 'somira_enqueue_assets');

function somira_enqueue_jquery()
{
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'somira_enqueue_jquery');


function theme_register_menus()
{
    register_nav_menus([
        'primary' => __('Primary Menu', 'your-theme-textdomain'),
        'footer_menu' => __('Footer Menu', 'your-theme-textdomain'),
    ]);
}
add_action('after_setup_theme', 'theme_register_menus');
add_theme_support('page-attributes');
add_action('wp_enqueue_scripts', function () {
    if (is_product()) {
        wc_enqueue_js('initZoom()'); // WooCommerce does this automatically
    }
});

add_action('wp_ajax_ajax_add_to_cart', 'handle_ajax_add_to_cart'); // for logged-in users
add_action('wp_ajax_nopriv_ajax_add_to_cart', 'handle_ajax_add_to_cart'); // for guests

function handle_ajax_add_to_cart()
{
    // Validate input
    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;

    if (!$product_id || $quantity < 1) {
        wp_send_json_error(['message' => 'Invalid product or quantity']);
        wp_die();
    }

    // Load WooCommerce Cart
    if (!WC()->cart) {
        include_once WC()->plugin_path() . '/includes/wc-cart-functions.php';
        WC()->cart = new WC_Cart();
    }

    WC()->cart->add_to_cart($product_id, $quantity);

    wp_send_json_success(['message' => 'Product added to cart']);
    wp_die();
}
