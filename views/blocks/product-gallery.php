<?php
$field = isset($args['field']) ? $args['field'] : 'product_gallery_1';
$gallery = get_field($field);

if ($gallery):
    $isDecorate = get_field($field . '_decor');
    $title = get_field($field . '_title');
    $subtitle = get_field($field . '_subtitle');
    $link = get_field($field . '_link');
    $link_title = get_field($field . '_link_title');
    ?>
    <div class="customWrapper product-gallery-wrapper">
        <div class="customBlock product-gallery">
            <div class="gallery <?php echo $isDecorate ? 'decorate' : ''; ?>"
                 style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/gallery-bg.webp)">
                <article class="gallery-text">
                    <?php if (!empty($subtitle)): ?>
                        <p class="gallery-subtitle"><?php echo esc_html($subtitle); ?></p>
                    <?php endif; ?>
                    <?php if (!empty($title)): ?>
                        <h3 class="gallery-title"><?php echo esc_html($title); ?></h3>
                    <?php endif; ?>
                </article>
                <ul class="gallery-list">
                    <?php foreach ($gallery as $index => $product): ?>
                        <li class="gallery-list-item">
                            <a href="<?php echo esc_url($product['link']); ?>" class="product-small-card">
                                <?php if (!empty($product['img'])): ?>
                                    <img class="product-small-card-img"
                                         src="<?php echo esc_url($product['img']); ?>"
                                         alt="<?php echo esc_attr($product['title']); ?>">
                                <?php endif; ?>
                                <article class="product-small-card-article">
                                    <?php if (!empty($product['title'])): ?>
                                        <h4 class="product-small-card-title"><?php echo esc_html($product['title']); ?></h4>
                                    <?php endif; ?>
                                    <?php if (!empty($product['description'])): ?>
                                        <p class="product-small-card-text"><?php echo esc_html($product['description']); ?></p>
                                    <?php endif; ?>
                                </article>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php if (!empty($link) && !empty($link_title)): ?>
                    <div class="gallery-buttons">
                        <a href="<?php echo esc_url($link); ?>" class="gallery-link"><?php echo esc_html($link_title); ?></a>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
<?php endif; ?>