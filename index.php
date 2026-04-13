<?php
function zefir_render_content() {
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
}

get_template_part('views/overall/layout');

