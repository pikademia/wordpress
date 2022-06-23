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



	echo '<div class="container xl">';
        get_template_part('template-parts/ebooks');
    echo '</div>';


get_footer();