<?php
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), filemtime(get_template_directory().'/style.css') );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/index.js', array(),filemtime(get_template_directory().'/index.js') , true);

  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );	