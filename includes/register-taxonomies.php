<?php

/**
 * Set up taxonomies.
 *
 * @since 0.1.0
 */

/* Set up taxonomies */
add_action( 'init', 'mro_cit_register_tax' );


/* Register taxonomies */
function mro_cit_register_tax() {

	// Add LOCATION taxonomy, hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Locations', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Location', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Locations', 'textdomain' ),
		'popular_items'              => __( 'Popular Locations', 'textdomain' ),
		'all_items'                  => __( 'All Locations', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Location', 'textdomain' ),
		'update_item'                => __( 'Update Location', 'textdomain' ),
		'add_new_item'               => __( 'Add New Location', 'textdomain' ),
		'new_item_name'              => __( 'New Location Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate locations with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove locations', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used locations', 'textdomain' ),
		'not_found'                  => __( 'No locations found.', 'textdomain' ),
		'menu_name'                  => __( 'Locations', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'ubicacion' ),
	);

	register_taxonomy( 'noc_location', 'noc_project', $args );



	// Add STAGE taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Stages', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Stage', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Stages', 'textdomain' ),
		'popular_items'              => __( 'Popular Stages', 'textdomain' ),
		'all_items'                  => __( 'All Stages', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Stage', 'textdomain' ),
		'update_item'                => __( 'Update Stage', 'textdomain' ),
		'add_new_item'               => __( 'Add New Stage', 'textdomain' ),
		'new_item_name'              => __( 'New Stage Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate stages with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove stages', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used stages', 'textdomain' ),
		'not_found'                  => __( 'No stages found.', 'textdomain' ),
		'menu_name'                  => __( 'Stages', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'etapas' ),
	);

	register_taxonomy( 'noc_stage', 'noc_project', $args );


	// Add TYPE taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Types', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Type', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Types', 'textdomain' ),
		'popular_items'              => __( 'Popular Types', 'textdomain' ),
		'all_items'                  => __( 'All Types', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Type', 'textdomain' ),
		'update_item'                => __( 'Update Type', 'textdomain' ),
		'add_new_item'               => __( 'Add New Type', 'textdomain' ),
		'new_item_name'              => __( 'New Type Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate types with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove types', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used types', 'textdomain' ),
		'not_found'                  => __( 'No types found.', 'textdomain' ),
		'menu_name'                  => __( 'Types', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'tipo' ),
	);

	register_taxonomy( 'noc_type', 'noc_project', $args );



	// Add BOARDS taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Boards', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Board', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Boards', 'textdomain' ),
		'popular_items'              => __( 'Popular Boards', 'textdomain' ),
		'all_items'                  => __( 'All Boards', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Board', 'textdomain' ),
		'update_item'                => __( 'Update Board', 'textdomain' ),
		'add_new_item'               => __( 'Add New Board', 'textdomain' ),
		'new_item_name'              => __( 'New Board Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate boards with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove boards', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used boards', 'textdomain' ),
		'not_found'                  => __( 'No boards found.', 'textdomain' ),
		'menu_name'                  => __( 'Boards', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'tableros' ),
	);

	register_taxonomy( 'noc_board', 'noc_project', $args );
}