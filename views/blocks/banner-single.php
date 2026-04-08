<?php
$field = isset($args['field']) ? $args['field'] : null;
$style = !empty($field['style']) ? $field['style'] : '';

$query = new WP_Query([
        'post_type' => 'product',
        'posts_per_page' => 1,
        'orderby' => 'rand',
]);

if ($query->have_posts()): ?>
    <div class="customWrapper banner-single-wrapper">
        <div class="customBlock banner-single">
            <?php while ($query->have_posts()): $query->the_post(); ?>
                <div class="product-card <?php echo $style; ?>"
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
                            <a href="<?php the_permalink(); ?>"
                               class="product-card-btn btn sandy">View product
                            </a>
                        </article>
                        <div class="product-card-img">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>"
                                 alt="<?php the_title(); ?>">
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif;
wp_reset_postdata();
?>
