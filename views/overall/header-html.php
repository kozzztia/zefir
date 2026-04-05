<header class="customWrapper">
    <div class="customBlock header">

        <button type="button" class="header-btn menu-btn" aria-label="menu">
            <span></span>
        </button>

        <div class="header-logo">
            <?php get_template_part('views/overall/logo'); ?>
        </div>

        <nav class="header-navigation-desktop">
            <?php get_template_part('views/overall/menu-html'); ?>
        </nav>

        <div class="header-navigation-mobile">
            <?php get_template_part('views/overall/menu-html'); ?>

            <button type="button" class="header-btn close-menu-btn" aria-label="close menu">
                <span></span>
            </button>
        </div>

        <div class="header-actions">

            <button type="button" class="header-btn search-btn" aria-label="search">
                <svg>
                    <use href="<?php echo get_template_directory_uri(); ?>/assets/svg/sprite.svg#search-icon"></use>
                </svg>
            </button>

            <button type="button" class="header-btn phone-btn" aria-label="phone">
                <svg>
                    <use href="<?php echo get_template_directory_uri(); ?>/assets/svg/sprite.svg#phone-icon"></use>
                </svg>
            </button>

            <button type="button" class="header-btn account-btn" aria-label="account">
                <svg>
                    <use href="<?php echo get_template_directory_uri(); ?>/assets/svg/sprite.svg#account-icon"></use>
                </svg>
            </button>

            <button type="button" class="header-btn cart-btn" aria-label="cart">
                <svg>
                    <use href="<?php echo get_template_directory_uri(); ?>/assets/svg/sprite.svg#cart-icon"></use>
                </svg>
            </button>

        </div>
    </div>
</header>
