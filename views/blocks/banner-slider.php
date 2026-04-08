<?php
$field = isset($args['field']) ? $args['field'] : 'banner_slider_1';
$slider = get_field($field);

if ($slider):
    $timer = get_field($field . '_timer');
    $isPagination = get_field($field . '_pagination');
    $timer = $timer ? intval($timer) : 50000;
    ?>
    <div class="customWrapper banner-slider-wrapper">
        <div class="customBlock banner-slider">
            <div class="swiper banner-swiper" data-timer="<?php echo $timer; ?>">
                <div class="swiper-wrapper">
                    <?php foreach ($slider as $index => $slide): ?>
                        <div class="swiper-slide">
                            <div class="product-card"
                                    <?php if (!empty($slide['id'])): ?>
                                        data-product="<?php echo esc_attr($slide['id']); ?>"
                                    <?php endif; ?>
                                    <?php if (!empty($slide['img'])): ?>
                                        style="background-image: url('<?php echo esc_url($slide['img']); ?>')"
                                    <?php endif; ?>>
                                <div class="product-card-content">
                                    <article class="product-card-article">
                                        <?php if (!empty($slide['title'])): ?>
                                            <h2 class="product-card-title"><?php echo esc_html($slide['title']); ?></h2>
                                        <?php endif; ?>

                                        <?php if (!empty($slide['description'])): ?>
                                            <p class="product-card-text"><?php echo esc_html($slide['description']); ?></p>
                                        <?php endif; ?>

                                        <?php if (!empty($slide['button_title'])): ?>
                                            <button class="product-card-btn btn <?php echo esc_attr($slide['button_style']); ?>"
                                                    type="button"
                                                    <?php if (!empty($slide['button_label'])): ?>
                                                        aria-label="<?php echo esc_attr($slide['button_label']); ?>"
                                                    <?php endif; ?>>
                                                <?php echo esc_html($slide['button_title']); ?>
                                            </button>
                                        <?php endif; ?>
                                    </article>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php if ($isPagination): ?>
                <div class="swiper-pagination pagination"></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>