<?php
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), filemtime(get_template_directory().'/style.css') );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/index.js', array(),filemtime(get_template_directory().'/index.js') , true);

  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );	


function theme_setup(){
  add_theme_support( 'post-thumbnails' );	
  add_theme_support( 'custom-background' );
  add_theme_support( 'custom-logo', array(
    'height'               => 80,
    'width'                => 80,
    'flex-height'          => true,
    'flex-width'           => true,
    'header-text'          => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => true,
) );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
add_theme_support( 'title-tag' );
add_theme_support('menus');

register_nav_menus( array(
  'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
  'secondary' => __( 'Secondary Menu', 'myfirsttheme' )
));

}
add_action('after_setup_theme','theme_setup');

function register_shortcodes(){
  add_shortcode( 'w_code', 'display_code' );
  function display_code(){
    $ret = "";
    $ret .= '<div class="container xl">';
    $ret .= '<div class="ebooks_section_w">';
    
    $args = array(
      'post_type' => 'post',
      'category_name' => 'ebook',
      'post_status' => 'publish',
      'order'=>'ASC'
  );
  $the_query = new WP_Query($args);
  if($the_query -> have_posts()){
      while($the_query -> have_posts()){
          $the_query -> the_post();
          $ret .= '<div class="ebook_item_w">';
          $ret .= '<a href="'.get_the_permalink().'">';
          if ( has_post_thumbnail() ) {
            $ret .= get_the_post_thumbnail();
          }
          //$ret .= '<img src="'. get_template_directory_uri() .'/img/article_default.jpg" alt="'. get_the_title().'" />';
          $ret .= '</a>';
          $ret .= '<h2 class="ebook_title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h2>';
          $ret .= '<p>'.substr(get_the_excerpt(), 0, 200).'...</p>';

          $ret .= '</div>'; // end ebook_item_w
      }
  }
      
  wp_reset_postdata();
  $ret .= '</div>'; //end ebooks_section_w
  $ret .= '</div>';//end container

  return $ret;
  } 
} 
add_action( 'init', 'register_shortcodes' );



function wporg_shortcode( $atts = [] ) {

  $wporg_atts = shortcode_atts(
      array(
          'q' => 0,
      ), $atts
  );
  $o = "";
  $o .= esc_html__( $wporg_atts['q'], 'wporg' );
  return $o;
}


function wporg_shortcodes_init() {
  add_shortcode( 'wporg', 'wporg_shortcode' );
}

add_action( 'init', 'wporg_shortcodes_init' );




