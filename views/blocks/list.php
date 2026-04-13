<?php if (have_posts()) : ?>

    <div class="customWrapper list-wrapper">
        <div class="customBlock list"
             style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/gallery-bg.webp' ?>')"
        >
            <ul class="list-inner">
                <?php while (have_posts()) : the_post();
                    $info = get_field('product_info');
                ?>
                    <li class="list-item">
                        <a href="<?php the_permalink(); ?>" class="list-item">
                            <?php if (has_post_thumbnail()): ?>
                                <img class="list-item-img"
                                     src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium')); ?>"
                                     alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                            <article class="list-item-article">
                                <h4 class="list-item-title"><?php the_title(); ?></h4>
                                <?php if (!empty($info['price'])): ?>
                                    <p class="list-item-count">$ <?php echo esc_html($info['price']); ?></p>
                                <?php else : ?>
                                    <p class="list-item-text"><?php echo esc_html(get_the_excerpt()); ?></p>
                                <?php endif; ?>
                            </article>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>

            <?php
            $links = paginate_links([
                    'type'      => 'array',
                    'mid_size'  => 2,
                    'prev_text' => '<spa aria-hidden="true"></spa>',
                    'next_text' => '<span aria-hidden="true"></span>',
            ]);

            if ($links) :
                echo '<ul class="list-pagination">';
                foreach ($links as $link) {
                    echo '<li class="page-item">' . $link . '</li>';
                }
                echo '</ul>';
            endif;
            ?>
        </div>
    </div>
<?php endif; ?>
