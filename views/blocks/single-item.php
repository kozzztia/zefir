
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

        <?php if ( $post_type == 'product' || $post_type == 'promo' || $post_type == 'service' ) : ?>
        <?php while (have_posts()): the_post(); ?>
        <div class="item item-<?php echo get_post_type(); ?>">

            <?php
            $images = get_field('product_images');
            $info = get_field('product_info');
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
                                <input type="radio" id="<?php echo $id; ?>" name="gallery" <?php echo $index === 'image_1' ? 'checked' : ''; ?> hidden>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                            </label>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if (empty($images)): ?>
                <div class="item-images">
                    <div class="item-images-image">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="<?php the_title(); ?>"/>
                    </div>
                </div>
            <?php endif; ?>

            <div class="item-content">
                <h1 class="item-content-title"><?php the_title(); ?></h1>

                <?php if (get_the_content()): ?>
                    <div class="item-content-text">
                        <?php the_content(); ?>
                    </div>
                <?php endif; ?>

                <div class="item-content-info">
                    <?php if (!empty($info['price'])): ?>
                        <p><b>Price:</b> <?php echo esc_html($info['price']); ?>$</p>
                    <?php endif; ?>
                    <?php if (!empty($info['description'])): ?>
                        <p><b>Description:</b> <?php echo esc_html($info['description']); ?></p>
                    <?php endif; ?>
                    <?php if (!empty($info['weight'])): ?>
                        <p><b>Weight:</b> <?php echo esc_html($info['weight']); ?>kg</p>
                    <?php endif; ?>
                    <?php if (!empty($info['taste'])): ?>
                        <p><b>Taste:</b> <?php echo esc_html($info['taste']); ?></p>
                    <?php endif; ?>
                </div>

                <div class="item-content-buttons">
                    <button type="button" class="item-content-button btn white" aria-label="send  to cart">
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>