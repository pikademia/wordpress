<!doctype html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
echo '<div class="container xl">';

    echo '<div class="header_section">';
        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }
        echo '<div>';
            echo '<p class="blog_info_name_w">'. get_bloginfo( 'name' ) . '</p>';
            echo '<p class="blog_info_desc_w">'.get_bloginfo( 'description' ). '</p>';
        echo '</div>';
    echo '</div>';