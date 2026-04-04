<header class="customWrapper">
    <div class="customBlock header">

        <button type="button" class="header-btn menu-btn" aria-label="menu">
            <span></span>
        </button>

        <div class="header-logo">
            <?php get_template_part('views/overall/logo'); ?>
        </div>

        <nav class="header-navigation desktop">
            <ul class="menu">
                <li class="menu-item"><a href="#">Main</a></li>
                <li class="menu-item"><a href="#">Popular</a></li>
                <li class="menu-item">
                    <a href="#">Products</a>
                    <ul class="sub-menu">
                        <li class="menu-item"><a href="#">desserts</a></li>
                        <li class="menu-item"><a href="#">cakes</a></li>
                        <li class="menu-item"><a href="#">bakery</a></li>
                        <li class="menu-item"><a href="#">strawberries and fruits in chocolate</a></li>
                        <li class="menu-item"><a href="#">sweets and chocolate</a></li>
                        <li class="menu-item"><a href="#">ice cream</a></li>
                    </ul>
                </li>
                <li class="menu-item"><a href="#">Contacts</a></li>
            </ul>
        </nav>

        <div class="header-actions desktop">

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
