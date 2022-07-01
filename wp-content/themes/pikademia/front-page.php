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


get_footer();