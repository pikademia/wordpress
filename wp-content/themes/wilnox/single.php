<?php
get_header();

echo '<div class="container xl">';
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();

            echo '<div class="single_info_section_w">';
                echo '<div class="single_info_section_img_w">';
                    get_template_part('template-parts/thumbnail');
                echo '</div>';

                echo '<div class="single_info_section_info_cont_w">';
                    echo '<h1 class="single_title">';
                        the_title();
                    echo '</h1>';
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
get_footer();