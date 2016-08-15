<?php
/*
* CUSTOM POST TYPE FUNCTIONS
*/
include_once("listing-post-type.php");


function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/**
   * Load front-end scripts
   *
   */
    function enqueue_scripts() {

    // jQuery
    
    wp_enqueue_script(
      'wpex-plugins',
      get_stylesheet_directory_uri() .'/js/plugins.js',
      array( 'jquery' )
    );
    wp_enqueue_script(
      'wpex-global',
      get_stylesheet_directory_uri() .'/js/global.js',
      array( 'jquery' )
    );
    //Caroufredsel Assets
    wp_enqueue_script(
      'wpex-global',
      get_stylesheet_directory_uri() .'/js/helper-plugins/jquery.ba-throttle-debounce.min.js',
      array( 'jquery')
    );
    wp_enqueue_script(
      'wpex-global',
      get_stylesheet_directory_uri() .'/js/helper-plugins/jquery.mousewheel.min.js',
      array( 'jquery' )
    );
    wp_enqueue_script(
      'wpex-global',
      get_stylesheet_directory_uri() .'/js/helper-plugins/jquery.touchSwipe.min.js',
      array( 'jquery')
    );
    wp_enqueue_script(
      'wpex-global',
      get_stylesheet_directory_uri() .'/js/helper-plugins/jquery.transit.min.js',
      array( 'jquery' )
    );

  }
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
/**
 * WordPress Widgets start right here.
 */
function gents_widgets_init_child() {

    register_sidebar(array(
        'name' => __('Header bar', 'gents'),
        'description' => __('header.php', 'gents'),
        'id' => 'header-bar',
        'before_title' => '<div class="header-title"><h4>',
        'after_title' => '</h4></div>',
        'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
        'after_widget' => '</div>'
    ));
}

add_action('widgets_init', 'gents_widgets_init_child');


function register_menu_top_header(){
    register_nav_menu( 'secondary-menu', 'Secondary Menu' );
}

add_action( 'init', 'register_menu_top_header' );

/*
* PIKLIST checker
*/
add_action('init', 'my_init_function');
function my_init_function()
{
  if(is_admin())
  {
   include_once('piklist-checker.php');
 
   if (!piklist_checker::check(__FILE__, 'theme'))
   {
     return;
   }
  }
}

function my_custom_init() {
  remove_post_type_support( 'post', 'custom-fields' );
  remove_post_type_support('page', 'custom-fields');
}
add_action( 'init', 'my_custom_init' );

?>
