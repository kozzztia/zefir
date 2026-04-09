<?php
$field = isset($args['field']) ? $args['field'] : null;

$type = !empty($field['type']) ? get_field($field['type']) : 'product';
$count = !empty($field['count']) ? get_field($field['count']) : -1;
$decor = !empty($field['decor']) ? get_field($field['decor']) : false;
$link = get_field($field['link']);
$title = get_field($field['title']);
$subtitle = get_field($field['subtitle']);

$query = new WP_Query([
        'post_type' => $type,
        'posts_per_page' => $count,
]);

if ($query->have_posts()): ?>
    <div class="customWrapper product-gallery-wrapper">
        <div class="customBlock product-gallery">
            <div class="gallery <?php echo $decor ? 'decorate' : ''; ?>"
                 style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/gallery-bg.webp)">
                <article class="gallery-text">
                    <?php if ($subtitle): ?>
                        <p class="gallery-subtitle"><?php echo esc_html($subtitle); ?></p>
                    <?php endif; ?>
                    <?php if ($title): ?>
                        <h3 class="gallery-title"><?php echo esc_html($title); ?></h3>
                    <?php endif; ?>
                </article>
                <ul class="gallery-list">
                    <?php while ($query->have_posts()): $query->the_post(); ?>
                        <li class="gallery-list-item">
                            <a href="<?php the_permalink(); ?>" class="product-small-card <?php echo $type ?>">
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
                        </li>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </ul>
                <?php if ($link): ?>
                    <div class="gallery-buttons">
                        <a href="<?php echo esc_url($link['url']); ?>" class="gallery-link">
                            <?php echo esc_html($link['title']); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>