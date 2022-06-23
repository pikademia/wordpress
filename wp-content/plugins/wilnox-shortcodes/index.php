<?php
/*
Plugin Name: Wilnox shortcodes
Description: It adds shortcodes to display data
Author: WILNOX
Version: 1.0.0
Author URI: https://wilnox.com 
*/

if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
define ('THIS_PLUGIN_URL', trailingslashit( plugins_url('/',__FILE__) ));

function add_theme_scripts_wil() {
    wp_register_style( 'wilnoxshortcodesstyle', THIS_PLUGIN_URL.'wilnoxshortcodesstyle.css', array(), rand()  );
    wp_enqueue_style( 'wilnoxshortcodesstyle');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts_wil' );


function register_shortcodes_wil(){
    add_shortcode( 'w_ebooks', 'display_ebooks' );
    add_shortcode( 'w_last_articles', 'display_last_articles' );

    function display_ebooks(){
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
            }else{
                $ret .= '<img src="'.THIS_PLUGIN_URL .'/default_img.jpg" alt="'.get_the_title().'" />';
            }

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


    function display_last_articles(){
        $ret = "";
        $ret .= '<div class="container xl">';
        $ret .= '<div class="last_post_section_w">';
        
        $args = array(
          'post_type' => 'post',
          'category__not_in' => array(get_cat_ID('ebook')),
          'post_status' => 'publish',
          'posts_per_page'=>3,
          'order'=>'DESC'
        );

      $the_query = new WP_Query($args);
      if($the_query -> have_posts()){
          while($the_query -> have_posts()){
              $the_query -> the_post();
              $ret .= '<div class="last_post_item_w">';
                $ret .= '<div class="last_post_item_thumbnail_cont_w">';
                    $ret .= '<a href="'.get_the_permalink().'">';
                    if ( has_post_thumbnail() ) {
                        $ret .= get_the_post_thumbnail();
                    }else{
                        $ret .= '<img src="'.THIS_PLUGIN_URL .'/default_img.jpg" alt="'.get_the_title().'" />';
                    }
                    $ret .= '</a>';

                $ret .= '<div class="last_post_item_thumbnail_cont_date_cont_w">';
                    $ret .= '<p class="no_padding">'.get_the_date('d').' / '. get_the_date('m') .'</p>';
                    $ret .= '<p class="no_padding">'.get_the_date('Y').'</p>';
                $ret .= '</div>';  

                $ret .= '<div class="last_post_item_thumbnail_cont_cat_cont_w">';
                $category_list = get_the_category( );
                foreach ($category_list as $cat){
                    $ret .= '<div class="cat_item_w">';
                        $ret .= '<a href="'. esc_url( get_category_link( $cat->term_id ) ).'">';
                        $ret .= $cat->name;
                        $ret .= '</a>';
                    $ret .= '</div>';
                }
                $ret .= '</div>'; // end last_post_item_thumbnail_cont_cat_cont_w
            $ret .=  '</div>'; // end last_post_item_thumbnail_cont_w

            $ret .= '<p><a href="'.get_the_permalink().'">'.get_the_title().'</a></p>';    
            $ret .= '<p>'.substr(get_the_excerpt(), 0, 200).'...</p>';  
        $ret .= '</div>'; // end last_post_item_w
        }
      }
          
      wp_reset_postdata();
      $ret .= '</div>'; //end last_post_section_w
      $ret .= '</div>';//end container
    
      return $ret;
      }
  } 
  add_action( 'init', 'register_shortcodes_wil' );







  // function to add shortcode with parameter

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
  