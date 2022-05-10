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

    echo '<h2 class="main_section_description_w">OSTATNIE WPISY</h2>';
    echo '<div class="last_posts_section_w">';
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page'=>3,
        'order'=>'DESC'
    );

    $the_query = new WP_Query($args);
    if($the_query -> have_posts()){
        while($the_query -> have_posts()){
            $the_query -> the_post();
            echo '<div class="last_post_item_w">';
                echo '<a href="'.get_the_permalink().'">';
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                }
                echo get_the_title().'</a>';
                echo '<p>'.substr(get_the_excerpt(), 0, 120).'</p>';   
            echo '</div>';
        }
    }

    wp_reset_postdata();
    echo '</div>';
echo '</div>';

get_footer();