<?php
get_header();

if ( have_posts() ) {
    echo '<div class="cat_title">Blog</div>';
    
    echo '<div class="container xl blog_container">';
        echo '<div class="blog_items_w">';

            while ( have_posts() ) {
                the_post();

                echo '<div class="blog_item_w">';
                echo '<p class="blog_item_date_w">'.get_the_date('d').' / '. get_the_date('m').' / '.get_the_date('Y') .'</p>';
                echo '<h2 class="blog_item_title_w"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h2>';
                echo '<p class="blog_item_excerpt_w">'.substr(get_the_excerpt(), 0, 200).'...</p>'; 
                echo '</div>';
            } 

            echo '<div class="pagination">';
            wpbeginner_numeric_posts_nav(); 
            echo '</div>';
            
        echo '</div>';
        echo '<div class="sidebar">';
        get_template_part( 'template-parts/sidebar', 'sidebar' );
        echo '</div>';
    echo '</div>'; // end container
}        

get_footer();