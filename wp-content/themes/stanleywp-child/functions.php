<?php
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


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