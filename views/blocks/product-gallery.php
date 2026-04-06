<div class="customWrapper product-gallery-wrapper">
    <div class="customBlock product-gallery">
        <div class="gallery decorate" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/gallery-bg.webp)">
            <article class="gallery-text">
                <p class="gallery-subtitle">advantages</p>
                <h3 class="gallery-title">why exactly us</h3>
            </article>

            <ul class="gallery-list">
                <?php for ($i = 1; $i <= 6; $i++): ?>
                    <li class="gallery-list-item">
                        <?php  set_query_var('product', $i); get_template_part('views/overall/product-item'); ?>
                    </li>
                <?php endfor; ?>
            </ul>

            <div class="gallery-buttons">
                <a href="#" class="gallery-link">
                    The entire range
                </a>
            </div>
        </div>
    </div>
</div>
