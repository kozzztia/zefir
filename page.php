<?php
function zefir_render_content() {

    get_template_part('views/blocks/banner-slider');

    get_template_part('views/blocks/product-gallery');

    get_template_part('views/blocks/banner-single');

    get_template_part('views/blocks/product-gallery', null, [
        'field' => 'product_gallery_2',
    ]);

    get_template_part('views/blocks/banner-single', null, [
        'field' => 'banner_single_product_2',
    ]);


}

get_template_part('views/overall/layout');
