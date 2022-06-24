<?php
get_header();

if ( have_posts() ) {
    echo '<div class="container cat_title">';
    echo 'Blog';

    echo '</div>';
    echo '<div class="w_categories"><ul>';
    wp_list_categories(array(
        'show_count'=> 1,
        'title_li' => '',
        'style' => 'list',
        'hierarchical' => true,
        'depth' => 1,
    ));
    echo '</ul></div>';
    
    echo '<div class="container xl blog_container">';

        while ( have_posts() ) {
            the_post();

            echo '<div class="blog_item_w">';
                echo '<div class="blog_thumbnail_cont">';
                    echo '<a href="'.get_the_permalink().'">';
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        }else{
                            echo '<img src="'.get_template_directory_uri() .'/img/default_img.jpg" alt="'.get_the_title().'" />';
                        }
                    echo '</a>';

                    echo '<div class="blog_thumbnail_date_w">';
                        echo '<p class="no_padding">'.get_the_date('d').' / '. get_the_date('m') .'</p>';
                        echo '<p class="no_padding">'.get_the_date('Y').'</p>';
                    echo '</div>';

                echo '</div>'; // end blog_thumbnail_cont

                echo '<div class="blog_info_cont_w">';
                    echo '<p><a href="'.get_the_permalink().'">';
                        the_title();
                    echo '</a></p>';
                    echo '<p>'.substr(get_the_excerpt(), 0, 300).'...</p>';   
                    echo '<div class="blog_info_cont_cat_w">';
                    $category_list = get_the_category( $id );
                    foreach ($category_list as $cat){
                        echo '<div class="cat_item_w">';
                            echo '<a href="'. esc_url( get_category_link( $cat->term_id ) ).'">';
                            echo $cat->name;
                            echo '</a>';
                        echo '</div>';
                    }
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        } 
    echo '</div>'; // end container
}        


get_footer();