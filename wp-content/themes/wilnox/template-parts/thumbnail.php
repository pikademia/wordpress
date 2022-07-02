<?php

if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}else{
    echo '<img src="'.get_template_directory_uri() .'/img/default.jpg" alt="'.get_the_title().'" />';
}



