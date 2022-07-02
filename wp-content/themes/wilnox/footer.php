<?php
?>
<div class="container footer">
    
<?php

$args = array(
    'post_type ' => 'page',
    'post_status' => 'draft',
    'pagename' => 'footer'
);

$the_query = new WP_Query($args);
if($the_query -> have_posts()){
    while($the_query -> have_posts()){
        $the_query -> the_post();
        the_content();

    }
}
wp_reset_postdata();



?>

</div>










<?php
wp_footer();

?>
</body>
</html>