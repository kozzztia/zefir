<?php
function zefir_render_content() {

    get_template_part('views/blocks/banner-slider', null, [
        'field' => [
            'type' => get_field('banner_slider_type_1'),
            'timer' => get_field('banner_slider_timer_1'),
        ],
    ]);

    get_template_part('views/blocks/product-gallery');

    get_template_part('views/blocks/banner-single', null, [
        'field' => [
            'style' => '',
        ],
    ]);

    get_template_part('views/blocks/product-gallery', null, [
        'field' => 'product_gallery_2',
    ]);

    get_template_part('views/blocks/banner-single', null, [
        'field' => [
            'style' => 'reverse',
        ],
    ]);


}

get_template_part('views/overall/layout');
