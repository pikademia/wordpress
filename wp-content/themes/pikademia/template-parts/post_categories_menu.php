<?php

if(!is_single()){
    echo '<div class="post_categories"><ul>';
    wp_list_categories(array(
        'show_count'=> 0,
        'title_li' => '',
        'style' => 'list',
        'hierarchical' => true,
        'depth' => 1,
        ));
    echo '</ul></div>';

}


if(!is_home() && !is_single()){
    echo '<div class="w_subcategories"><ul>';
    $thiscat = get_queried_object();
    $args = array('parent' => $thiscat->term_id);
    $categories = get_categories( $args );
    foreach($categories as $category) { 
       echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name. '('. $category->count . ')</a></li>';  
    }
    echo '</ul></div>';
}

if(is_single()){

}