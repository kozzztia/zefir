<?php get_header(); ?>

<main>
    <?php
    if ( function_exists('zefir_render_content') ) {
        zefir_render_content();
    }
    ?>
</main>

<?php get_footer(); ?>
