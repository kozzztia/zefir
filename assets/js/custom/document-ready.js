
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
        if($('textarea').length){
            $('textarea').each(function(){
                let thisEl = $(this),
                    thisTextAreaHeight = thisEl.outerHeight();
                thisEl.autogrow();
                thisEl.css("height", thisTextAreaHeight);
            });
        }

        if($('header').length){
            $('.header-navigation-mobile .menu-item-has-children').each(function() {
                const item = $(this);
                const arrow = $('<span class="arrow"></span>');
                item.find('> a').after(arrow);

                arrow.on('click', function(e) {
                    e.preventDefault();
                    item.toggleClass('open');
                });
            });

            $('.header-navigation-desktop .menu-item-has-children').each(function() {
                const item = $(this);
                const arrow = $('<span class="arrow"></span>');
                item.find('> a').after(arrow);
            });

            $('.header-btn.menu-btn').each(function() {
                const btn = $(this);
                const menu = $('.header-navigation-mobile')
                const close = menu.find('.close-menu-btn');
                btn.on('click', function(e) {
                    e.preventDefault();
                    menu.toggleClass('open');
                })

                close.on('click', function(e) {
                    e.preventDefault();
                    menu.removeClass('open');
                })
            })
        }

    });
})(jQuery);
