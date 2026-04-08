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
            'count'      => 'product_gallery_count_1',
            'decor'      => 'product_gallery_decor_1',
            'title'      => 'product_gallery_title_1',
            'subtitle'   => 'product_gallery_subtitle_1',
            'link'       => 'product_gallery_link_1',
        ],
    ]);


    get_template_part('views/blocks/banner-single', null, [
        'field' => [
            'style' => 'banner_single_style_1',
            'name' => 'banner_single_name_1',
            'picture' => 'banner_single_picture_1',
        ],
    ]);

    get_template_part('views/blocks/product-gallery', null, [
        'field' => [
            'count'      => 'product_gallery_count_2',
            'decor'      => 'product_gallery_decor_2',
            'title'      => 'product_gallery_title_2',
            'subtitle'   => 'product_gallery_subtitle_2',
            'link'       => 'product_gallery_link_2',
        ],
    ]);

    get_template_part('views/blocks/banner-single', null, [
        'field' => [
            'style' => 'banner_single_style_2',
            'name' => 'banner_single_name_2',
            'picture' => 'banner_single_picture_2',
        ],
    ]);


}

get_template_part('views/overall/layout');
