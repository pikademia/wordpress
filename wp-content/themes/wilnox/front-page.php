<?php
get_header();


    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            echo '<p class="main_content_w">';
                the_content();
            echo '</p>';
        } 
    }

    get_template_part('template-parts/baner');

	echo '<div class="container xl">';
        get_template_part('template-parts/ostatnie_wpisy');
    echo '</div>';


get_footer();