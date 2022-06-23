<?php
get_header();


    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
<<<<<<< HEAD
            echo '<p class="main_content_w">';
                the_content();
            echo '</p>';
=======
            //echo '<p class="main_content_w">';
                the_content();
            //echo '</p>';
>>>>>>> bd982522f77789532b75dd54af09980d5aa14d40
        } 
    }



<<<<<<< HEAD
	echo '<div class="container xl">';
        get_template_part('template-parts/ebooks');
    echo '</div>';
=======
	// echo '<div class="container xl">';
    //     get_template_part('template-parts/ebooks');
    // echo '</div>';
>>>>>>> bd982522f77789532b75dd54af09980d5aa14d40


get_footer();