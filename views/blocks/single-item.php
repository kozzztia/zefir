
<div class="customWrapper single-item-wrapper">
    <div class="customBlock single-item"
         style="background-image: url('<?php
         echo esc_url(
                 has_post_thumbnail()
                         ? get_the_post_thumbnail_url(get_the_ID(), 'full')
                         : get_template_directory_uri() . '/assets/img/banner-slide-1.webp'
         );
         ?>')"
    >
        <?php $post_type = get_post_type(); ?>
        <?php if ( $post_type == 'product'): ?>
        <?php while (have_posts()): the_post(); ?>
        <div class="item item-<?php echo get_post_type(); ?>">

            <?php
            $images = get_field(get_post_type() . '_images');
            if ($images): ?>
                <div class="item-list">
                    <?php foreach ($images as $index => $image): ?>
                        <?php if (!empty($image['url'])): ?>
                            <?php $id = 'gallery-' . $index; ?>
                            <label class="item-list-item" for="<?php echo $id; ?>">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                            </label>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <div class="item-images">
                    <?php foreach ($images as $index => $image): ?>
                        <?php if (!empty($image['url'])): ?>
                            <?php $id = 'gallery-' . $index; ?>
                            <label class="item-images-item">
                                <input type="radio" id="<?php echo $id; ?>" name="gallery" <?php echo (int) filter_var($index, FILTER_SANITIZE_NUMBER_INT) ==  1 ? 'checked' : ''; ?> hidden>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                            </label>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="item-content">
                <h1 class="item-content-title"><?php the_title(); ?></h1>
                <div class="typo item-content-text">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>