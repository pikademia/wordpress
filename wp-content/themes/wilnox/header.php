<!doctype html>
<html lang="pl">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://unpkg.com/@tabler/icons@latest/iconfont/tabler-icons.min.css">
    <script src="https://unpkg.com/@tabler/icons@1.36.0/icons-react/dist/index.umd.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
    echo '<div class="main_menu">';
    wp_nav_menu( array('theme_location'=>'primary') );
    echo '</div>';
echo '<div class="container xl">';

    echo '<div class="header_section">';
        echo '<div class="header_section_logo_section">';
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
            echo '<div>';
                echo '<p class="blog_info_name_w">'. get_bloginfo( 'name' ) . '</p>';
                echo '<p class="blog_info_desc_w">'.get_bloginfo( 'description' ). '</p>';
            echo '</div>';
        echo '</div>';
        echo '<div class="search_section">';
        get_search_form( );
        echo '</div>';
    echo '</div>';
    //wp_nav_menu( array('theme_location'=>'secondary') );

echo '</div>';