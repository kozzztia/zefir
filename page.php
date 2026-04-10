<?php
function zefir_render_content() {

    get_template_part('views/blocks/banner-slider', null, [
        'field' => [
            'type' => get_field('banner_slider_type_1'),
            'timer' => get_field('banner_slider_timer_1'),
        ],
    ]);

    get_template_part('views/blocks/product-gallery', null, [
        'field' => [
            'type'       => get_field('product_gallery_type_1'),
            'count'      => get_field('product_gallery_count_1'),
            'decor'      => get_field('product_gallery_decor_1'),
            'title'      => get_field('product_gallery_title_1'),
            'subtitle'   => get_field('product_gallery_subtitle_1'),
            'link'       => get_field('product_gallery_link_1'),
        ],
    ]);


    get_template_part('views/blocks/banner-single', null, [
        'field' => [
            'type'       => get_field('banner_single_type_1'),
            'style' => get_field('banner_single_style_1'),
            'name' => get_field('banner_single_name_1'),
            'picture' => get_field('banner_single_picture_1'),
        ],
    ]);

    get_template_part('views/blocks/product-gallery', null, [
        'field' => [
            'type'       => get_field('product_gallery_type_2'),
            'count'      => get_field('product_gallery_count_2'),
            'decor'      => get_field('product_gallery_decor_2'),
            'title'      => get_field('product_gallery_title_2'),
            'subtitle'   => get_field('product_gallery_subtitle_2'),
            'link'       => get_field('product_gallery_link_2'),
        ],
    ]);

    get_template_part('views/blocks/banner-single', null, [
        'field' => [
            'type'       => get_field('banner_single_type_2'),
            'style'      => get_field('banner_single_style_2'),
            'name'       => get_field('banner_single_name_2'),
            'picture'    => get_field('banner_single_picture_2'),
        ],
    ]);

    get_template_part('views/blocks/small-slider', null, [
        'field' => [
            'type'       => get_field('small_slider_type_1'),
            'title'      => get_field('small_slider_title_1'),
            'subtitle'   => get_field('small_slider_subtitle_1'),
            'link'       => get_field('small_slider_link_1'),
            'timer'      => get_field('small_slider_timer_1'),
        ],
    ]);

    get_template_part('views/blocks/banner-single', null, [
        'field' => [
            'type'       => get_field('banner_single_type_3'),
            'style'      => get_field('banner_single_style_3'),
            'name'       => get_field('banner_single_name_3'),
            'picture'    => get_field('banner_single_picture_3'),
        ],
    ]);


    get_template_part('views/blocks/product-gallery', null, [
        'field' => [
            'type'       => get_field('product_gallery_type_3'),
            'count'      => get_field('product_gallery_count_3'),
            'decor'      => get_field('product_gallery_decor_3'),
            'title'      => get_field('product_gallery_title_3'),
            'subtitle'   => get_field('product_gallery_subtitle_3'),
            'link'       => get_field('product_gallery_link_3'),
        ],
    ]);



}

get_template_part('views/overall/layout');
