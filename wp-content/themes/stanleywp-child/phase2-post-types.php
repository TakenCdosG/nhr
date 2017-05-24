<?php

// This theme uses post thumbnails
add_post_type_support( 'developments', 'thumbnail' );
add_post_type_support( 'commercial', 'thumbnail' );
add_post_type_support( 'person', 'thumbnail' );


//developments Custom Post Type

function create_posttype_development() {

register_post_type( 'developments',
// CPT Options
array(
'labels' => array(
'name' => __( 'Developments' ),
'singular_name' => __( 'Development' ),
'menu_name'           => __( 'Developments', 'NHR' ),
'parent_item_colon'   => __( 'Parent Development', 'NHR' ),
'all_items'           => __( 'All Developments', 'NHR' ),
'view_item'           => __( 'View Development', 'NHR' ),
'add_new_item'        => __( 'Add New Development',  'NHR' ),
'add_new'             => __( 'Add New Development', 'NHR' ),
'edit_item'           => __( 'Edit Development', 'NHR' ),
'update_item'         => __( 'Update Development', 'NHR' ),
'search_items'        => __( 'Search Development', 'NHR' ),
'not_found'           => __( 'Not Development Found', 'NHR' ),
'not_found_in_trash'  => __( 'Not Development Found in Trash', 'NHR' )

),
'public' => true,
'has_archive' => true,
'rewrite' => array('slug' => 'developments'),
'menu_position' => 5,
'menu_icon' => get_stylesheet_directory_uri() . "/images/listings.png",
)
);
}
// Hooking up function to theme setup
add_action( 'init', 'create_posttype_development' );


/*
* Creating a function to create the Custom Post Type
*/

function custom_post_type_development() {

// Set other options for Custom Post Type

$args = array(
'label'               => __( 'Developments', 'NHR' ),
'description'         => __( 'Developments', 'NHR' ),
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
'has_archive'         => false,
'exclude_from_search' => false,
'publicly_queryable'  => true,
'capability_type'     => 'post',
);

// Registering Custom Post Type
register_post_type( 'developments', $args );

}

/* Hook into the 'init' action so that the function
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type_development', 0 );

//polylang support

add_filter('pll_get_post_types', 'my_pll_get_post_types_developments');
function my_pll_get_post_types_developments($types) {
  return array_merge($types, array('developments' => 'developments'));
}


//commercial Custom Post Type

function create_posttype_commercial() {

register_post_type( 'commercial',
// CPT Options
array(
'labels' => array(
'name' => __( 'Commercial' ),
'singular_name' => __( 'Commercial' ),
'menu_name'           => __( 'Commercial', 'NHR' ),
'parent_item_colon'   => __( 'Parent Commercial', 'NHR' ),
'all_items'           => __( 'All Commercial', 'NHR' ),
'view_item'           => __( 'View Commercial', 'NHR' ),
'add_new_item'        => __( 'Add New Commercial',  'NHR' ),
'add_new'             => __( 'Add New Commercial', 'NHR' ),
'edit_item'           => __( 'Edit Commercial', 'NHR' ),
'update_item'         => __( 'Update Commercial', 'NHR' ),
'search_items'        => __( 'Search Commercial', 'NHR' ),
'not_found'           => __( 'Not Commercial Found', 'NHR' ),
'not_found_in_trash'  => __( 'Not Commercial Found in Trash', 'NHR' )

),
'public' => true,
'has_archive' => true,
'rewrite' => array('slug' => 'commercial'),
'menu_position' => 5,
'menu_icon' => get_stylesheet_directory_uri() . "/images/listings.png",
)
);
}
// Hooking up function to theme setup
add_action( 'init', 'create_posttype_commercial' );


/*
* Creating a function to create the Custom Post Type
*/

function custom_post_type_commercial() {

// Set other options for Custom Post Type

$args = array(
'label'               => __( 'Commercial', 'NHR' ),
'description'         => __( 'Commercial', 'NHR' ),
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
'has_archive'         => false,
'exclude_from_search' => false,
'publicly_queryable'  => true,
'capability_type'     => 'post',
);

// Registering Custom Post Type
register_post_type( 'commercial', $args );

}

/* Hook into the 'init' action so that the function
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type_commercial', 0 );

//polylang support

add_filter('pll_get_post_types', 'my_pll_get_post_types_commercial');
function my_pll_get_post_types_commercial($types) {
  return array_merge($types, array('commercial' => 'commercial'));
}


//person Custom Post Type

function create_posttype_person() {

register_post_type( 'person',
// CPT Options
array(
'labels' => array(
'name' => __( 'Person' ),
'singular_name' => __( 'Person' ),
'menu_name'           => __( 'Person', 'NHR' ),
'parent_item_colon'   => __( 'Parent Person', 'NHR' ),
'all_items'           => __( 'All Person', 'NHR' ),
'view_item'           => __( 'View Person', 'NHR' ),
'add_new_item'        => __( 'Add New Person',  'NHR' ),
'add_new'             => __( 'Add New Person', 'NHR' ),
'edit_item'           => __( 'Edit Person', 'NHR' ),
'update_item'         => __( 'Update Person', 'NHR' ),
'search_items'        => __( 'Search Person', 'NHR' ),
'not_found'           => __( 'Not Person Found', 'NHR' ),
'not_found_in_trash'  => __( 'Not Person Found in Trash', 'NHR' )

),
'public' => true,
'has_archive' => true,
'rewrite' => array('slug' => 'person'),
'menu_position' => 5,
'menu_icon' => get_stylesheet_directory_uri() . "/images/listings.png",
)
);
}
// Hooking up function to theme setup
add_action( 'init', 'create_posttype_person' );


/*
* Creating a function to create the Custom Post Type
*/

function custom_post_type_person() {

// Set other options for Custom Post Type

$args = array(
'label'               => __( 'Person', 'NHR' ),
'description'         => __( 'Person', 'NHR' ),
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
'has_archive'         => false,
'exclude_from_search' => false,
'publicly_queryable'  => true,
'capability_type'     => 'post',
);

// Registering Custom Post Type
register_post_type( 'person', $args );

}

/* Hook into the 'init' action so that the function
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type_person', 0 );

//polylang support

add_filter('pll_get_post_types', 'my_pll_get_post_types_person');
function my_pll_get_post_types_person($types) {
  return array_merge($types, array('person' => 'person'));
}