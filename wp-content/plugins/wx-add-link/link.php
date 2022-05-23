<?php
/*
  Plugin Name: Pierwszy plugin
  Description: Plugin dodaje adres www na koniec każdego artykułu
  Version: 1.0.0
  Author: Mateusz Wiliński
  Author URI: https://www.wilnox.pl
*/

add_filter('the_content', 'addToEndOfPost', 10);

function addToEndOfPost($content) {
  if (is_single() && is_main_query()) {
    return $content . '<p><a href="https://wilnox.pl/">Odwiedz nas ;D</a></p>';
  }

  return $content;
}