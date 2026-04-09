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
            const delay = $swiper.data('timer');

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
            });
        }

        if ($('.small-slider-wrapper .slider').length) {
            const $swiper = $('.swiper');
            const delay = $swiper.data('timer') || 4000;

            const swiper = new Swiper('.small-swiper', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 10,
                autoplay: { delay },
                watchSlidesProgress: true,
                watchSlidesVisibility: true,
                pagination: {
                    el: '.pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.next',
                    prevEl: '.prev',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    1024: {
                        slidesPerView: 2,
                        spaceBetween: 25,
                    },
                    1440: {
                        slidesPerView: 3,
                        spaceBetween: 50,
                    }
                }
            });
        }
    });
})(jQuery);
