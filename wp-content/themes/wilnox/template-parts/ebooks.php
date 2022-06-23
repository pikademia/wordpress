<?php

echo '<div class="ebooks_section_w">';
$args = array(
    'post_type' => 'post',
    'category_name' => 'ebook',
    'post_status' => 'publish',
    'order'=>'ASC'
);

$the_query = new WP_Query($args);
if($the_query -> have_posts()){
    while($the_query -> have_posts()){
        $the_query -> the_post();

        echo '<div class="ebook_item_w">';
<<<<<<< HEAD
            if(in_category('ebook')){
                ?>
            <div class="ebook_image"> <img src="<?php echo get_template_directory_uri() ?>/img/ebook.png" alt="<?php the_title(); ?>" /></div>
            <?php
            }
=======
>>>>>>> bd982522f77789532b75dd54af09980d5aa14d40
            echo '<a href="'.get_the_permalink().'">';
                get_template_part('template-parts/thumbnail');
            echo '</a>'; 

            echo '<h2 class="ebook_title"><a href="'.get_the_permalink().'">';
                the_title();
            echo '</a></h2>';
            echo '<p>'.substr(get_the_excerpt(), 0, 200).'...</p>';   
        echo '</div>'; // end last_post_item_w
    }
}

wp_reset_postdata();

echo '</div>'; //end ebooks_section_w