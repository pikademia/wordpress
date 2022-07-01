<?php
get_header();

if ( have_posts() ) {
    echo '<div class="container cat_title">';
    if(is_archive()){
        single_cat_title();
    }
    if(is_home()){
        echo 'Blog';
    }
    echo '</div>';
    
    while ( have_posts() ) {
        the_post();
        echo '<p><a href="'.get_the_permalink().'">';
            the_title();
        echo '</a></p>';
        echo '<p>'.substr(get_the_excerpt(), 0, 300).'...</p>';   
    }
 }

get_footer();