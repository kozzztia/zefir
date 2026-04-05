<div class="customWrapper banner-slider-wrapper">
    <div class="customBlock banner-slider">
        <div class="swiper banner-swiper" data-timer="7000">
            <div class="swiper-wrapper">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                <div class="swiper-slide">
                    <?php  set_query_var('product', $i); get_template_part('views/overall/banner-slide'); ?>
                </div>
                <?php endfor; ?>
            </div>
            <div class="swiper-pagination pagination"></div>
        </div>
    </div>
</div>
