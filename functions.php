<?php
function zefir_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'zefir_setup');

function zefir_scripts() {
    wp_enqueue_style('zefir-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.0.0');
    wp_enqueue_script('zefir-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0.0', true);
    wp_enqueue_script('zefir-plugins', get_template_directory_uri() . '/assets/js/plugins.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('zefir-custom', get_template_directory_uri() . '/assets/js/custom.min.js', array('jquery'), '1.0.0', true);
}

function register_custom_cpts() {
    // Products
    register_post_type('product', [
        'labels' => [
            'name'          => 'Products',
            'singular_name' => 'Product',
        ],
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-cart',
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest' => true,
    ]);

    // Services
    register_post_type('service', [
        'labels' => [
            'name'          => 'Services',
            'singular_name' => 'Service',
        ],
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-hammer',
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest' => true,
    ]);

    register_post_type('promo', [
        'labels' => [
            'name'          => 'Promos',
            'singular_name' => 'Promo',
        ],
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-megaphone',
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'register_custom_cpts');


register_nav_menus(array(
    'primary' => __('Primary Menu', 'zefir'),
));

add_action('wp_enqueue_scripts', 'zefir_scripts');