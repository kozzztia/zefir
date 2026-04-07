<?php
$field = isset($args['field']) ? $args['field'] : 'banner_single_product_1';
$product = get_field($field);

if ($product):?>
    <div class="customWrapper banner-single-wrapper">
        <div class="customBlock banner-single">
            <div class="banner-product"
                    <?php if (!empty($product['id'])): ?>
                        data-product="<?php echo esc_attr($product['id']); ?>"
                    <?php endif; ?>
                    <?php if (!empty($product['img'])): ?>
                        style="background-image: url('<?php echo esc_url($product['background']); ?>')"
                    <?php endif; ?>>
                <div class="banner-product-content">
                    <article class="banner-product-article">
                        <?php if (!empty($product['title'])): ?>
                            <h2 class="banner-product-title"><?php echo esc_html($product['title']); ?></h2>
                        <?php endif; ?>

                        <?php if (!empty($product['description'])): ?>
                            <p class="banner-product-text"><?php echo esc_html($product['description']); ?></p>
                        <?php endif; ?>

                        <?php if (!empty($product['button_title'])): ?>
                            <button class="banner-product-btn btn <?php echo esc_attr($product['button_style']); ?>"
                                    type="button"
                                    <?php if (!empty($product['button_label'])): ?>
                                        aria-label="<?php echo esc_attr($product['button_label']); ?>"
                                    <?php endif; ?>>
                                <?php echo esc_html($product['button_title']); ?>
                            </button>
                        <?php endif; ?>
                    </article>
                    
                    <div class="banner-product-img">
                        <img src="<?php echo esc_attr($product['img']); ?>" alt="<?php echo esc_attr($product['title']); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>