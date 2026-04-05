(function ($) {
    $(document).ready(function () {

        /** header */
        $("body").headroom({
            tolerance: {
                up: 14,
                down: 16
            }
        });

        /** textarea autogrow */
        if ($('textarea').length) {
            $('textarea').each(function () {
                let thisEl = $(this),
                    thisTextAreaHeight = thisEl.outerHeight();
                thisEl.autogrow();
                thisEl.css("height", thisTextAreaHeight);
            });
        }
        // header navigation
        if ($('header').length) {
            $('.menu-item-has-children').each(function () {
                const item = $(this);
                const arrow = $('<span class="arrow"></span>');
                item.find('> a').after(arrow);

                if (item.closest('.header-navigation-mobile').length) {
                    arrow.on('click', function (e) {
                        e.preventDefault();
                        item.toggleClass('open');
                    });
                }
            });

            $('.menu-btn').on('click', function (e) {
                e.preventDefault();
                $('.header-navigation-mobile').toggleClass('open');
            });

            $('.close-menu-btn').on('click', function (e) {
                e.preventDefault();
                $('.header-navigation-mobile').removeClass('open');
            });
        }
        // banner slider
        if ($('.banner-slider-wrapper .banner-swiper').length) {
            const $swiper = $('.banner-slider-wrapper .banner-swiper');
            const delay = $swiper.data('timer') || 4000;

            new Swiper('.banner-swiper', {
                loop: true,
                autoplay: {
                    delay: delay,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    dynamicBullets: true,
                    dynamicMainBullets: 5,
                },
                spaceBetween: 10,
            });
        }
    });
})(jQuery);
