<?php
get_header();

echo '<div class="container xl">';
get_template_part( 'template-parts/post_categories_menu', 'post_categories_menu' );
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();

            echo '<div class="single_info_section_w">';
                echo '<div class="single_info_section_img_w">';
                get_template_part( 'template-parts/thumbnail', 'thumbnail' );
                echo '</div>';

                echo '<div class="single_info_section_info_cont_w">';
                    echo '<h1 class="single_title">'.get_the_title().'</h1>';
                    echo '<div>Published: '.get_the_date('d / m / Y').'</div>';
                    echo '<div class="single_info_section_info_cont_cat_cont_w"> Categories: ';
                        $category_list = get_the_category( $id );
                        foreach ($category_list as $cat){
                            echo '<div class="cat_item_w">';
                                echo '<a href="'. esc_url( get_category_link( $cat->term_id ) ).'">';
                                    echo $cat->name;
                                echo '</a>';
                            echo '</div>';
                        }
                    echo '</div>';

                    echo '<div class="single_info_section_info_cont_tags_cont_w"> Tags: ';        
                    $posttags = get_the_tags();
                    if ($posttags) {
                        foreach($posttags as $tag) {
                            echo '<span>'. $tag->name . ' </span>'; 
                        }
                    }
                    echo '</div>';

                echo '</div>'; // end single_info_section_info_cont_w

            echo '</div>'; // end single_info_section_w
            
            echo '<p class="single_main_content_w">';
                the_content();
            echo '</p>';

        } 
    } 

echo '</div>'; // end container



// random posts from category
// echo '<div class="rand_posts_cont">';

// $post = get_post();
// if($post){
//     $categories = get_the_category($post->ID);
// } 

// $args = array(
//     'post_type' => 'post',
//     'category_name' => $categories[0]->name,
//     'orderby'   => 'rand',
//     'posts_per_page' => 4, 
//     );
 
// $the_query2 = new WP_Query( $args );
// $string = '<h2 class="random_articles_prop_title">MORE ARTICLES </H2>'; 
// if ( $the_query2->have_posts() ) {
 
// $string .= '<div class="random_articles_prop">';
//     while ( $the_query2->have_posts() ) {
//         $the_query2->the_post();
//         $string .= '<div>';
//         if ( has_post_thumbnail() ) {
//             $string .= '<a href="'. get_permalink() .'">'. get_the_post_thumbnail() .'</a>';
//         }else{
//             $string .= '<a href="'. get_permalink() .'">'.'<img src="'.get_template_directory_uri() .'/img/default_img.jpg" alt="'.get_the_title().'" />'.'</a>';
//         }
//         $string .= '<h3><a href="'. get_permalink() .'">'. get_the_title() .'</a></h3>';
//         $string .= '</div>';
//     }
//     $string .= '</div>';
//     wp_reset_postdata();
// }
// echo $string;
// echo '</div>';
// echo '<h2 class="thanks_for_reading">Thanks for reading. Hope you found it useful! ;)</h2>';

get_footer();