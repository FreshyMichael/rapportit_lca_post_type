<?php
/**
* Plugin Name: RapportIt LCA Custom Post Type
* Plugin URI: https://github.com/FreshyMichael/rapportit_lca_post_type
* Description: Custom Post Type for US Labor Condition Applications
* Version: 1.0.0
* Author: FreshySites
* Author URI: https://freshysites.com/
* License: GNU v3.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	die();
}


/* RapportIt LCA Custom Post Type Start */
function rapportit_register_post_type() {

	$labels = array(
			'name' => __( ‘LCAs’, ‘rapportit’ ),
			'singular_name' => __( 'LCA', ‘rapportit’ ),
			'add_new' => __( 'New LCA', ‘rapportit’ ),
			'add_new_item' => __( 'Add New LCA', ‘rapportit’ ),
			'edit_item' => __( 'Edit LCA', ‘rapportit’ ),
			'new_item' => __( 'New LCA', ‘rapportit’ ),
			'view_item' => __( 'View LCAs', ‘rapportit’ ),
			'search_items' => __( 'Search LCAs', ‘rapportit’ ),
			'not_found' =>  __( 'No LCAs Found', ‘rapportit’ ),
			'not_found_in_trash' => __( 'No LCAs found in Trash', ‘rapportit’ ),
		);

	$args = array(
 		'labels' => $labels,
 		'has_archive' => true,
 		'public' => true,
 		'hierarchical' => false,
 		'supports' => array(
  	'title',
  	'editor',
  	'excerpt',
  	'custom-fields',
  	'thumbnail',
  	'page-attributes'
 		),
		'menu_icon' => 'dashicons-media-text',
 		'taxonomies' => 'category',
 		'rewrite'   => array( 'slug' => 'lca' ),
 		‘show_in_rest’ => true
	);

	register_post_type( 'rapportit_lca', $args );

}

add_action( 'init', 'rapportit_register_post_type' );

// All About Updates

//  Begin Version Control | Auto Update Checker
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
// ***IMPORTANT*** Update this path to New Github Repository Master Branch Path
	'https://github.com/FreshyMichael/rapportit_lca_post_type',
	__FILE__,
// ***IMPORTANT*** Update this to New Repository Master Branch Path
	'rapportit_lca_post_type'
);
//Enable Releases
$myUpdateChecker->getVcsApi()->enableReleaseAssets();
//Optional: If you're using a private repository, specify the access token like this:
//
//
//Future Update Note: Comment in these sections and add token and branch information once private git established
//
//
//$myUpdateChecker->setAuthentication('your-token-here');
//Optional: Set the branch that contains the stable release.
//$myUpdateChecker->setBranch('stable-branch-name');

//______________________________________________________________________________
/* RapportIt LCA Custom Post Type End */
?>
