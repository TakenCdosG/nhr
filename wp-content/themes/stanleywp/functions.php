<?php
/**
 *
 * WARNING: Please do not edit this file in any way
 *
 * load the theme function files
 */


/**
 * Slightly Modified Options Framework
 */
require_once ('admin/index.php');

if ( ! function_exists('bi_get_data') ) {
	function bi_get_data($id, $fallback = false) {
		global $smof_data;
		if ( $fallback == false ) $fallback = '';
		$output = ( isset($smof_data[$id]) && $smof_data[$id] !== '' ) ? $smof_data[$id] : $fallback;
		return $output;
	}
}


require_once( get_template_directory() .'/functions/functions.php' );
require_once( get_template_directory() .'/functions/hooks.php' );
require_once( get_template_directory() .'/functions/function-extras.php' );
require_once( get_template_directory() .'/functions/custom-css.php' );
require_once( get_template_directory() .'/functions/tracking.php' );
require_once( get_template_directory() .'/functions/comments-layout.php' );

// Functions needed for admin
require_once( get_template_directory() .'/functions/post-types/post-type-helpers.php' );
//require_once( get_template_directory() .'/functions/post-types/register-post-types.php' );
require_once( get_template_directory() .'/functions/post-types/register-taxonomies.php' );

/************* METABOX ****************/

// Re-define meta box path and URL
define( 'RWMB_URL', trailingslashit( get_stylesheet_directory_uri() . '/functions/meta-box' ) );
define( 'RWMB_DIR', trailingslashit( TEMPLATEPATH . '/functions/meta-box' ) );
// Include the meta box script
require_once RWMB_DIR . 'meta-box.php';
require_once RWMB_DIR . 'setup.php';