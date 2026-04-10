<?php
function zefir_render_content() {

    get_template_part('views/blocks/single-item');

    get_template_part('views/blocks/small-slider', null, [
        'field' => [
            'type'       => get_post_type(),
            'title'      => get_post_type() . " list",
            'subtitle'   => 'be shore  it work',
            'timer'      => 7000,
            'link'       => [
                'url' => '#',
                'title' => 'all '. get_post_type() . 's',
            ],
        ],
    ]);

    get_template_part('views/blocks/banner-slider', null, [
        'field' => [
            'type' => 'service',
        ],
    ]);

    get_template_part('views/blocks/product-gallery', null, [
        'field' => [
            'type'       => 'promo',
            'title'      => 'promo',
            'subtitle'   => 'we can',
            'count'      => 3,
            'link'       => [
                'url' => '/promo',
                'title' => 'all promos',
            ],
        ],
    ]);
}

get_template_part('views/overall/layout');

