<!doctype html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
echo '<div class="container">';
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }