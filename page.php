<?php
function zefir_render_content() {

    get_template_part('views/blocks/banner-slider', null, [
        'field' => [
            'type' => 'banner_slider_type_1',
            'timer' => 'banner_slider_timer_1',
        ],
    ]);

    get_template_part('views/blocks/product-gallery', null, [
        'field' => [
            'type'       => 'product_gallery_type_1',
            'count'      => 'product_gallery_count_1',
            'decor'      => 'product_gallery_decor_1',
            'title'      => 'product_gallery_title_1',
            'subtitle'   => 'product_gallery_subtitle_1',
            'link'       => 'product_gallery_link_1',
        ],
    ]);


    get_template_part('views/blocks/banner-single', null, [
        'field' => [
            'type'       => 'banner_single_type_1',
            'style' => 'banner_single_style_1',
            'name' => 'banner_single_name_1',
            'picture' => 'banner_single_picture_1',
        ],
    ]);

    get_template_part('views/blocks/product-gallery', null, [
        'field' => [
            'type'       => 'product_gallery_type_2',
            'count'      => 'product_gallery_count_2',
            'decor'      => 'product_gallery_decor_2',
            'title'      => 'product_gallery_title_2',
            'subtitle'   => 'product_gallery_subtitle_2',
            'link'       => 'product_gallery_link_2',
        ],
    ]);

    get_template_part('views/blocks/banner-single', null, [
        'field' => [
            'type'       => 'banner_single_type_2',
            'style' => 'banner_single_style_2',
            'name' => 'banner_single_name_2',
            'picture' => 'banner_single_picture_2',
        ],
    ]);

    get_template_part('views/blocks/small-slider', null, [
        'field' => [
            'type'       => 'small_slider_type_1',
            'title'      => 'small_slider_title_1',
            'subtitle'   => 'small_slider_subtitle_1',
            'link'       => 'small_slider_link_1',
            'timer'      => 'small_slider_timer_1',
        ],
    ]);

    get_template_part('views/blocks/banner-single', null, [
        'field' => [
            'type'       => 'banner_single_type_3',
            'style' => 'banner_single_style_3',
            'name' => 'banner_single_name_3',
            'picture' => 'banner_single_picture_3',
        ],
    ]);


    get_template_part('views/blocks/product-gallery', null, [
        'field' => [
            'type'       => 'product_gallery_type_3',
            'count'      => 'product_gallery_count_3',
            'decor'      => 'product_gallery_decor_3',
            'title'      => 'product_gallery_title_3',
            'subtitle'   => 'product_gallery_subtitle_3',
            'link'       => 'product_gallery_link_3',8
        ],
    ]);



}

get_template_part('views/overall/layout');
