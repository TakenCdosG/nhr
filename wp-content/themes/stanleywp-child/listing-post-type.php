<?php

// This theme uses post thumbnails
add_theme_support('post-thumbnails');
add_post_type_support( 'properties', 'thumbnail' );
/*
* NEW THUMB SIZE
*/
update_option( 'medium_size_w', 800 );
update_option( 'medium_size_h', 511 );
update_option( 'medium_crop', 1 );

function custom_image_sizes() {
  add_theme_support('post-thumbnails');
  add_image_size('medium_custom', 300, 198, true);
  add_image_size('medium_custom', 300, 198, true);
}
add_action('after_setup_theme', 'custom_image_sizes');
function add_custom_sizes( $imageSizes ) {
  $my_sizes = array(
    'medium_custom' => 'Medium-small'
  );
  return array_merge( $imageSizes, $my_sizes );
}
add_filter( 'image_size_names_choose', 'add_custom_sizes' );



//Properties Custom Post Type

function create_posttype() {

register_post_type( 'properties',
// CPT Options
array(
'labels' => array(
'name' => __( 'Properties' ),
'singular_name' => __( 'Property' ),
'menu_name'           => __( 'Properties', 'NHR' ),
'parent_item_colon'   => __( 'Parent Property', 'NHR' ),
'all_items'           => __( 'All Properties', 'NHR' ),
'view_item'           => __( 'View Property', 'NHR' ),
'add_new_item'        => __( 'Add New Property',  'NHR' ),
'add_new'             => __( 'Add New Property', 'NHR' ),
'edit_item'           => __( 'Edit Property', 'NHR' ),
'update_item'         => __( 'Update Property', 'NHR' ),
'search_items'        => __( 'Search Property', 'NHR' ),
'not_found'           => __( 'Not Property Found', 'NHR' ),
'not_found_in_trash'  => __( 'Not Property Found in Trash', 'NHR' )

),
'public' => true,
'has_archive' => true,
'rewrite' => array('slug' => 'properties'),
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
'label'               => __( 'Properties', 'NHR' ),
'description'         => __( 'Properties', 'NHR' ),
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
register_post_type( 'properties', $args );

}

/* Hook into the 'init' action so that the function
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );

/*
* Taxonomies
*/
// Property Categories
add_action( 'init', 'build_taxonomies', 0 );

function build_taxonomies() {
register_taxonomy( 'categories', 'properties', array( 'hierarchical' => true, 'label' => 'Property type', 'query_var' => true, 'rewrite' => true ) );
}


//polylang support

add_filter('pll_get_post_types', 'my_pll_get_post_types');
function my_pll_get_post_types($types) {
	return array_merge($types, array('properties' => 'properties'));
}

/*
* PIKLIST CUSTOM PAGES
*/
add_filter('piklist_get_file_data', 'my_custom_comment_block', 10, 2);
function my_custom_comment_block($data, $type)
{
  // If not a Meta-box section than bail
  if($type != 'meta-boxes')
  {
    return $data;
  }
 
  // Allow Piklist to read our custom comment block attribute: "Hide for Template", and set it to hide_for_template
  $data['show_for_template'] = 'Show for Template';
 
  return $data;
}

add_filter('piklist_add_part', 'my_show_for_template', 10, 2);
function my_show_for_template($data, $type)
{
  global $post;
 
  // If not a meta box than bail
  if($type != 'meta-boxes')
  {
    return $data;
  }
 
  // Check if any page template is set in the comment block
  if (!empty($data['show_for_template'])) 
  {
    // Get the active page template
    $active_template = pathinfo(get_page_template_slug($post->ID), PATHINFO_FILENAME);
 	if($active_template == ""){
 		$active_template = "default";
 	}
    // Is there a page template set for this page?

      // Does the active page template match what we want to hide?
      if (strpos($data['show_for_template'], $active_template) == FALSE or strpos($data['show_for_template'], $active_template) == "")
      {
      	$data['role'] = 'no-role';
        // Change meta-box access to user role: no-role
         
      }
    
  }
  return $data;
}
?>