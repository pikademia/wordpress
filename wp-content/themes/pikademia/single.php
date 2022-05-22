<?php
get_header();

    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();

            echo '<div class="single_info_section_w">';
                echo '<div class="single_img_w">';
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    }else{
                        ?>
                            <img src="<?php bloginfo('template_directory'); ?>/article_default.jpg" alt="<?php the_title(); ?>" />
                        <?php
                    }
                echo '</div>';

                echo '<div class="single_info_w">';
                    echo '<h1 class="page_title_w">'.get_the_title().'</h1>';
                    echo '<div class="date_w">Data utworzenia: '.get_the_date('d / m / Y').'</div>';
                    echo '<div class="category_list_w"> Kategorie: ';
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

            echo '<p class="main_content_w">'.get_the_content().'</p>';
        } 
    } 

get_footer();