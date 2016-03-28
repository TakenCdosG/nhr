<?php
//Listings Custom Post Type

// This theme uses post thumbnails
add_theme_support('post-thumbnails');
add_post_type_support( 'listings', 'thumbnail' );
/*
* NEW THUMB SIZE
*/
update_option( 'thumbnail_size_w', 800 );
update_option( 'thumbnail_size_h', 420 );
update_option( 'thumbnail_crop', 1 );


function create_posttype() {

register_post_type( 'listings',
// CPT Options
array(
'labels' => array(
'name' => __( 'Listings' ),
'singular_name' => __( 'Listing' ),
'menu_name'           => __( 'Listings', 'NHR' ),
'parent_item_colon'   => __( 'Parent Listing', 'NHR' ),
'all_items'           => __( 'All Listings', 'NHR' ),
'view_item'           => __( 'View Listing', 'NHR' ),
'add_new_item'        => __( 'Add New Listing',  'NHR' ),
'add_new'             => __( 'Add New Listing', 'NHR' ),
'edit_item'           => __( 'Edit Listing', 'NHR' ),
'update_item'         => __( 'Update Listing', 'NHR' ),
'search_items'        => __( 'Search Listing', 'NHR' ),
'not_found'           => __( 'Not Listing Found', 'NHR' ),
'not_found_in_trash'  => __( 'Not Listing Found in Trash', 'NHR' )

),
'public' => true,
'has_archive' => true,
'rewrite' => array('slug' => 'listings'),
'menu_position' => 5,
'menu_icon' => get_stylesheet_directory_uri() . "/images/listings.png",
)
);
}
// Hooking up function to theme setup
add_action( 'init', 'create_posttype' );


/*
* Creating a function to create the Custom Post Type
*/

function custom_post_type() {

// Set other options for Custom Post Type

$args = array(
'label'               => __( 'Listings', 'NHR' ),
'description'         => __( 'Listings', 'NHR' ),
'labels'              => $labels,
// Features in Post Editor
'supports'            => array( 'title', 'author', 'comments'  ),
// Taxonomies or custom taxonomy.
//'taxonomies'          => array( 'categories' ),
/* A hierarchical CPT is like Pages and can have
* Parent and child items. A non-hierarchical CPT
* is like Posts.
*/
'hierarchical'        => false,
'public'              => true,
'show_ui'             => true,
'show_in_menu'        => true,
'show_in_nav_menus'   => true,
'show_in_admin_bar'   => true,
'menu_position'       => 5,
'can_export'          => true,
'has_archive'         => true,
'exclude_from_search' => false,
'publicly_queryable'  => true,
'capability_type'     => 'post',
);

// Registering Custom Post Type
register_post_type( 'listings', $args );

}

/* Hook into the 'init' action so that the function
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );

/*
* Taxonomies
*/
// Listing Categories
add_action( 'init', 'build_taxonomies', 0 );

function build_taxonomies() {
register_taxonomy( 'categories', 'listings', array( 'hierarchical' => true, 'label' => 'Listings type', 'query_var' => true, 'rewrite' => true ) );
}

?>