<?php

echo '<h2 class="main_section_description_w">HOT ARTICLES</h2>';
echo '<div class="last_post_section_w">';
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

            echo '<div class="last_post_item_thumbnail_cont_w">';
                echo '<a href="'.get_the_permalink().'">';
                    get_template_part('template-parts/thumbnail');
                echo '</a>';

                echo '<div class="last_post_item_thumbnail_cont_date_cont_w">';
                    echo '<p class="no_padding">'.get_the_date('d').' / '. get_the_date('m') .'</p>';
                    echo '<p class="no_padding">'.get_the_date('Y').'</p>';
                echo '</div>';

                echo '<div class="last_post_item_thumbnail_cont_cat_cont_w">';
                $category_list = get_the_category( $id );
                foreach ($category_list as $cat){
                    echo '<div class="cat_item_w">';
                        echo '<a href="'. esc_url( get_category_link( $cat->term_id ) ).'">';
                        echo $cat->name;
                        echo '</a>';
                    echo '</div>';
                }
                echo '</div>'; // end last_post_item_thumbnail_cont_cat_cont_w
                
            echo '</div>'; // end last_post_item_thumbnail_cont_w

            echo '<p><a href="'.get_the_permalink().'">';
                the_title();
            echo '</a></p>';
            echo '<p>'.substr(get_the_excerpt(), 0, 200).'...</p>';   



        echo '</div>'; // end last_post_item_w
    }
}

wp_reset_postdata();

echo '</div>'; //end last_post_section_w