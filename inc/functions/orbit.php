<?php // orbit include

if ( ! function_exists('cornerstone_orbit_slide_post_type') ) {

// Register Custom Post Type
function cornerstone_orbit_slide_post_type() {

	$labels = array(
		'name'                => _x( 'Slides', 'Post Type General Name', 'cornerstone' ),
		'singular_name'       => _x( 'Slide', 'Post Type Singular Name', 'cornerstone' ),
		'menu_name'           => __( 'Slide', 'cornerstone' ),
		'parent_item_colon'   => __( 'Parent Slide:', 'cornerstone' ),
		'all_items'           => __( 'All Slides', 'cornerstone' ),
		'view_item'           => __( 'View Slide', 'cornerstone' ),
		'add_new_item'        => __( 'Add New Slide', 'cornerstone' ),
		'add_new'             => __( 'New Slide', 'cornerstone' ),
		'edit_item'           => __( 'Edit Slide', 'cornerstone' ),
		'update_item'         => __( 'Update Slide', 'cornerstone' ),
		'search_items'        => __( 'Search Slides', 'cornerstone' ),
		'not_found'           => __( 'No Slides found', 'cornerstone' ),
		'not_found_in_trash'  => __( 'No Slides found in Trash', 'cornerstone' ),
	);
	$args = array(
		'label'               => __( 'cornerstone_orbit', 'cornerstone' ),
		'description'         => __( 'Orbit Slider', 'cornerstone' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
		'taxonomies'          => array( 'post' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'query_var'           => 'cornerstone_slide',
		'rewrite'             => false,
		'capability_type'     => 'post',
	);
	register_post_type( 'cornerstone_orbit', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cornerstone_orbit_slide_post_type', 0 );

}