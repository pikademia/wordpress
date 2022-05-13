<?php
get_header();

echo '<div class="container">';
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            echo '<h1 class="page_title_w">'.get_the_title().'</h1>';
            echo '<p class="main_content_w">'.get_the_content().'</p>';
        } 
    } 
	
    get_template_part('template-parts/ostatnie_wpisy');

echo '</div>';

get_footer();