<?php
$field = isset($args['field']) ? $args['field'] : null;

$type = !empty($field['type']) ? $field['type'] : 'product';
$decor = !empty($field['decor']) ? $field['decor'] : false;
$link = !empty($field['link']) ? $field['link'] : null;
$title = !empty($field['title']) ? $field['title'] : null;
$subtitle = !empty($field['subtitle']) ? $field['subtitle'] : null;
$timer = !empty($field['timer']) ? $field['timer']: 10000;

$query = new WP_Query([
        'post_type' => $type,
        'posts_per_page' =>-1,
]);

if ($query->have_posts()): ?>
    <div class="customWrapper small-slider-wrapper">
        <div class="customBlock small-slider">
            <div class="slider" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/gallery-bg.webp)">
                <?php if ($subtitle || $title) : ?>
                <article class="slider-text">
                    <?php if ($subtitle): ?>
                        <p class="slider-subtitle"><?php echo esc_html($subtitle); ?></p>
                    <?php endif; ?>
                    <?php if ($title): ?>
                        <h3 class="slider-title"><?php echo esc_html($title); ?></h3>
                    <?php endif; ?>
                </article>
                <?php endif; ?>
                <div class="swiper small-swiper" data-timer="<?php echo $timer ?>">
                    <div class="swiper-wrapper">
                    <?php while ($query->have_posts()): $query->the_post(); ?>
                        <div class="slider-item swiper-slide">

                            <a href="<?php the_permalink(); ?>" class="product-small-card">
                                <?php if (has_post_thumbnail()): ?>
                                    <img class="product-small-card-img"
                                         src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium')); ?>"
                                         alt="<?php the_title_attribute(); ?>">
                                <?php endif; ?>
                                <article class="product-small-card-article">
                                    <h4 class="product-small-card-title"><?php the_title(); ?></h4>
                                    <p class="product-small-card-text"><?php echo esc_html(get_the_excerpt()); ?></p>
                                </article>
                            </a>

                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                    <div class="swiper-button-next next"></div>
                    <div class="swiper-button-prev prev"></div>
                </div>
                <?php if ($link): ?>
                    <div class="slider-buttons">
                        <a href="<?php echo esc_url($link['url']); ?>" class="slider-link">
                            <?php echo esc_html($link['title']); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>