<?php
$field = isset($args['field']) ? $args['field'] : 'banner_single_product_1';
$product = get_field($field);

if ($product):?>
    <div class="customWrapper banner-single-wrapper">
        <div class="customBlock banner-single">
            <div class="product-card <?php echo esc_attr($product['style']); ?>"
                    <?php if (!empty($product['id'])): ?>
                        data-product="<?php echo esc_attr($product['id']); ?>"
                    <?php endif; ?>
                    <?php if (!empty($product['img'])): ?>
                        style="background-image: url('<?php echo esc_url($product['background']); ?>')"
                    <?php endif; ?>>
                <div class="product-card-content">
                    <article class="product-card-article">
                        <?php if (!empty($product['title'])): ?>
                            <h2 class="product-card-title"><?php echo esc_html($product['title']); ?></h2>
                        <?php endif; ?>

                        <?php if (!empty($product['description'])): ?>
                            <p class="product-card-text"><?php echo esc_html($product['description']); ?></p>
                        <?php endif; ?>

                        <?php if (!empty($product['button_title'])): ?>
                            <button class="product-card-btn btn <?php echo esc_attr($product['button_style']); ?>"
                                    type="button"
                                    <?php if (!empty($product['button_label'])): ?>
                                        aria-label="<?php echo esc_attr($product['button_label']); ?>"
                                    <?php endif; ?>>
                                <?php echo esc_html($product['button_title']); ?>
                            </button>
                        <?php endif; ?>
                    </article>

                    <?php if (!empty($product['img'])): ?>
                    <div class="product-card-img">
                        <img src="<?php echo esc_attr($product['img']); ?>" alt="<?php echo esc_attr($product['title']); ?>">
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>