<?php
get_header();


    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            //echo '<h1 class="page_title_w">'.get_the_title().'</h1>';
            echo '<p class="main_content_w">'.get_the_content().'</p>';
        } 
    } 
	echo '<div class="container xl">';
        get_template_part('template-parts/ostatnie_wpisy');
    echo '</div>';


get_footer();