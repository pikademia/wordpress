<?php
?>

<div class="container footer">
    <p>WILNOX </p>
    <p>Polski Wirtualny Instytut Naukowy</p>

    <?php
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }
    ?>

</div>










<?php
wp_footer();

?>
</body>
</html>