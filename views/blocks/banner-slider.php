<?php
$field = isset($args['field']) ? $args['field'] : null;
$timer = get_field($field['timer']);
$type = get_field($field['type']);

$query = new WP_Query([
        'post_type'      => $type,
        'posts_per_page' => -1,
]);

if ($query->have_posts()): ?>
<div class="customWrapper banner-slider-wrapper">
    <div class="customBlock banner-slider">
        <div class="swiper banner-swiper" data-timer="<?php echo $timer; ?>">
            <div class="swiper-wrapper">
            <?php while ($query->have_posts()): $query->the_post(); ?>
                <div class="swiper-slide">
                    <div class="product-card"
                         style="background-image: url('<?php
                         echo esc_url(
                                 has_post_thumbnail()
                                         ? get_the_post_thumbnail_url(get_the_ID(), 'large')
                                         : get_template_directory_uri() . '/assets/img/banner-slide-1.webp'
                         );
                         ?>')">
                        <div class="product-card-content">
                            <article class="product-card-article">
                                <h2 class="product-card-title"><?php the_title(); ?></h2>
                                <p class="product-card-text"><?php echo esc_html(get_the_excerpt()); ?></p>
                                <a href="<?php the_permalink(); ?>" class="product-card-btn btn sandy">
                                    View <?php echo $type ?>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
            <div class="swiper-pagination pagination"></div>
        </div>
    </div>
</div>
<?php endif; wp_reset_postdata(); ?>