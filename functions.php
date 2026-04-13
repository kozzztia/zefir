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
        'has_archive'  => true,
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
        'has_archive'  => true,
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
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-megaphone',
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'register_custom_cpts');

add_action('wp_body_open', 'zefir_render_breadcrumbs');


register_nav_menus(array(
    'primary' => __('Primary Menu', 'zefir'),
));

add_action('wp_enqueue_scripts', 'zefir_scripts');


function custom_breadcrumbs() {
    // на главной не показываем
    if ( is_front_page() || is_home() ) {
        return;
    }

    $breadcrumbs = [];
    $breadcrumbs[] = '<a href="' . home_url() . '">Main</a>';

    if ( is_category() ) {
        $breadcrumbs[] = single_cat_title('', false);
    }
    elseif ( is_singular('post') ) {
        $category = get_the_category();
        if ( !empty($category) ) {
            $breadcrumbs[] = '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->name . '</a>';
        }
        $breadcrumbs[] = get_the_title();
    }
    elseif ( is_post_type_archive() ) {
        $breadcrumbs[] = post_type_archive_title('', false);
    }
    elseif ( is_singular() ) {
        $post_type = get_post_type();
        $archive_link = get_post_type_archive_link($post_type);
        $post_type_obj = get_post_type_object($post_type);

        if ( $archive_link ) {
            $breadcrumbs[] = '<a href="' . esc_url($archive_link) . '">' . esc_html($post_type_obj->labels->name) . '</a>';
        }
        $breadcrumbs[] = get_the_title();
    }
    elseif ( is_page() ) {
        global $post;
        if ( $post->post_parent ) {
            $parents = [];
            $parent_id = $post->post_parent;
            while ( $parent_id ) {
                $page = get_page($parent_id);
                $parents[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id = $page->post_parent;
            }
            $breadcrumbs = array_merge($breadcrumbs, array_reverse($parents));
        }
        $breadcrumbs[] = get_the_title();
    }

    echo implode(' / ', $breadcrumbs);
}

add_action('pre_get_posts', function($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('product')) {
        $query->set('posts_per_page', 12);
    }
});
