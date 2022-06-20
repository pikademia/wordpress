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

        echo '<div class="container xl">';
            echo '<div class="blog_container">';

            while ( have_posts() ) {
                the_post();
                echo '<div class="blog_item_w">';
                    echo '<div class="blog_item_thumb_cont_w">';
                        echo '<a href="'.get_the_permalink().'">';
                            get_template_part('template-parts/thumbnail');
                        echo '</a>';

                        echo '<div class="blog_item_thumb_cont_date_cont_w">';
                            echo '<p class="no_padding">'.get_the_date('d').' / '. get_the_date('m') .'</p>';
                            echo '<p class="no_padding">'.get_the_date('Y').'</p>';
                        echo '</div>';

                    echo '</div>'; // end blog_item_thumb_cont_w

                    echo '<div class="blog_item_info_cont_w">';
                        echo '<p><a href="'.get_the_permalink().'">';
                            the_title();
                        echo '</a></p>';
                        echo '<p>'.substr(get_the_excerpt(), 0, 300).'...</p>';   
                        echo '<div class="blog_item_info_cont_cat_cont_w">';
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
            echo '</div>'; // end blog container
        echo '</div>'; // end container
        } 

get_footer();