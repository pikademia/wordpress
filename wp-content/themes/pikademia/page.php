<?php
get_header();

echo '<div class="container xl">';
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            echo '<h1 class="page_title_w">'.get_the_title().'</h1>';
            echo '<p class="main_content_w">'.get_the_content().'</p>';
        } 
    } 
echo '</div>'; // end container
get_footer();