<?php

add_shortcode( 'new-project-form', 'noc_do_frontend_new_project_form_shortcode' );
/**
 * Shortcode to display a CMB2 form for a post ID.
 * @param  array  $atts Shortcode attributes
 * @return string       Form HTML markup
 */
function noc_do_frontend_new_project_form_shortcode( $atts = array() ) {
	global $post;

	extract( shortcode_atts( array(
		'type' => 'torres',
		'package' => 'basico'
	), $atts ) );

	// Current user
    $user_id = get_current_user_id();

	/**
	 * Depending on your setup, check if the user has permissions to edit_posts
	 */
	if ( ! current_user_can( 'edit_posts' ) ) {
		return __( 'You do not have permissions to add new projects.', 'noc-functions' );
	}

    // Use ID of metabox in wds_frontend_form_register
    // $metabox_id = 'noc_frontend_new_project_apartments';

    if ( $type == 'torres' && $package == 'basico') {
    	$metabox_id = 'noc_frontend_new_project_apartments';
    } elseif ( $type == 'torres' && $package == 'premium') {
    	$metabox_id = 'noc_frontend_new_project_apartments_premium';
    } elseif ( $type == 'casas' && $package == 'basico') {
    	$metabox_id = 'noc_frontend_new_project_houses';
    } elseif ( $type == 'lotes' && $package == 'basico') {
    	$metabox_id = 'noc_frontend_new_project_lots';
    } elseif ( $type == 'casas' && $package == 'premium') {
        $metabox_id = 'noc_frontend_new_project_houses_premium';
    } elseif ( $type == 'lotes' && $package == 'premium') {
        $metabox_id = 'noc_frontend_new_project_lots_premium';
    }

    // since post ID will not exist yet, just need to pass it something
    $object_id  = 'fake-oject-id';

    // Get CMB2 metabox object
    $cmb = cmb2_get_metabox( $metabox_id, $object_id );

    // Get $cmb object_types
    $post_types = $cmb->prop( 'object_types' );

    // Parse attributes. These shortcode attributes can be optionally overridden.
    $atts = shortcode_atts( array(
        'post_author' => $user_id ? $user_id : 1, // Current user, or admin
        'post_status' => 'pending',
        'post_type'   => reset( $post_types ), // Only use first object_type in array
    ), $atts, 'new-project-form' );

    // Initiate our output variable
    $output = '';
    $output .= '<h2>TYPE: '.$type.' '.$package.'</h2>';

    // Our CMB2 form stuff goes here

    // Get our form
    $output .= cmb2_get_metabox_form( $cmb, $object_id, array( 'save_button' => __( 'Submit Project', 'noc-functions' ) ) );


    return $output;
}