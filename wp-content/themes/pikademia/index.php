<?php
get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		the_title();
        echo '</br>';
        the_content();
        echo '</br>';
	} 
} 


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
        the_title();
        echo '</br>';
        the_content();
        echo '</br>';
    }
}

wp_reset_postdata();


get_footer();