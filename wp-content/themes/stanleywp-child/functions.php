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
/*
* LOGO UPLOADER
*/
function themeslug_theme_customizer($wp_customize) {
  $wp_customize -> add_section( 'themeslug_logo_section' , array(
      'title'       => __( 'Logo', 'themeslug' ),
      'priority'    => 30,
      'description' => 'Upload a logo to replace the default site name and description in the header',
  ) );

  $wp_customize->add_setting( 'themeslug_logo' );

  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
      'label'    => __( 'Logo', 'themeslug' ),
      'section'  => 'themeslug_logo_section',
      'settings' => 'themeslug_logo',
  ) ) );
  }
  add_action( 'customize_register', 'themeslug_theme_customizer' );
?>
