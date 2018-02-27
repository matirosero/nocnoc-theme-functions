<?php

/**
 * Set up post types.
 *
 * @since 0.1.0
 */

/* Set up post types */
add_action( 'init', 'mro_noc_register_cpt' );


/* Register post types */
function mro_noc_register_cpt() {


	/*
	 * Project
	 */
	register_post_type( 'noc_project',

	 	// let's now add all the options for this post type
		array('labels' => array(
				'name' => __('Projects', 'mro-nocf'), /* This is the Title of the Group */
				'singular_name' => __('Project', 'mro-nocf'), /* This is the individual type */
				'all_items' => __('All Projects', 'mro-nocf'), /* the all items menu item */
				'add_new' => __('Add New', 'mro-nocf'), /* The add new menu item */
				'add_new_item' => __('Add New Project', 'mro-nocf'), /* Add New Display Title */
				'edit' => __( 'Edit', 'mro-nocf' ), /* Edit Dialog */
				'edit_item' => __('Edit Project', 'mro-nocf'), /* Edit Display Title */
				'new_item' => __('New Project', 'mro-nocf'), /* New Display Title */
				'view_item' => __('View Project', 'mro-nocf'), /* View Display Title */
				'search_items' => __('Search Projects', 'mro-nocf'), /* Search Custom Type Title */
				'not_found' =>  __('No projects found', 'mro-nocf'), /* This displays if there are no entries yet */
				'not_found_in_trash' => __('No projects found in Trash', 'mro-nocf'), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Project items', 'mro-nocf' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true, //change to false?
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 20, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-building', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite' 	=> array( 'slug' => 'proyectos' ),
			'has_archive' => true, /* you can rename the slug here */
			'taxonomies' => array( 'noc_type', 'noc_stage', 'noc_location' ),
			// 'capability_type' => 'post',
			'hierarchical' => false, //false = post
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'excerpt', 'author' ),
			'show_in_menu'        => TRUE,
        	'show_in_nav_menus'   => true,  //change to false?
	 	) /* end of options */
	); /* end of register post type */

}