<?php

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
            echo '<div class="top_w">';
                echo '<div class="last_post_item_date_w">';
                    echo '<div class="date_w">'.get_the_date('d').' / '. get_the_date('m') .'</div>';
                    echo '<div class="date_year_w">'.get_the_date('Y').'</div>';
                echo '</div>';

                echo '<div class="category_list_w">';
                $category_list = get_the_category( $id );
                foreach ($category_list as $cat){
                    echo '<div class="cat_item_w">';
                        echo '<a href="'. esc_url( get_category_link( $cat->term_id ) ).'">';
                        echo $cat->name;
                        echo '</a>';
                    echo '</div>';
                }
                echo '</div>';
                echo '<a href="'.get_the_permalink().'">';
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                }else{
                    ?>
                        <img src="<?php bloginfo('template_directory'); ?>/article_default.jpg" alt="<?php the_title(); ?>" />
                    <?php
                }
                echo '</a>';
            echo '</div>';

            echo '<p><a href="'.get_the_permalink().'">'. get_the_title().'</a></p>';
            echo '<p>'.substr(get_the_excerpt(), 0, 360).'</p>';   
        echo '</div>';
    }
}

wp_reset_postdata();
echo '</div>';