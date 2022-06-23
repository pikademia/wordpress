<?php

if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
else{
    if(in_category('wordpress')){
        ?>
        <img src="<?php echo get_template_directory_uri() ?>/img/wordpress_default.jpg" alt="<?php the_title(); ?>" />
        <?php
    }
    elseif(in_category('python')){
        ?>
        <img src="<?php echo get_template_directory_uri() ?>/img/python_default.jpg" alt="<?php the_title(); ?>" />
        <?php 
    }
    else{
        ?>
        <img src="<?php echo get_template_directory_uri() ?>/img/article_default.jpg" alt="<?php the_title(); ?>" />
        <?php
    }
}



