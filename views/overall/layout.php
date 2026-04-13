<?php get_header(); ?>

<main>
    <?php
    get_template_part('views/overall/bread-crumb');

    if ( function_exists('zefir_render_content') ) {
        zefir_render_content();
    }
    ?>
</main>

<?php get_footer(); ?>
