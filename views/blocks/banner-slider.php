<div class="customWrapper banner-slider-wrapper">
    <div class="customBlock banner-slider">
        <div class="swiper banner-swiper" data-timer="7000">
            <div class="swiper-wrapper">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                <div class="swiper-slide">
                    <?php get_template_part('views/overall/banner-slide'); set_query_var('product', $i); ?>
                </div>
                <?php endfor; ?>
            </div>
            <div class="swiper-pagination pagination"></div>
        </div>
    </div>
</div>
