<?php

add_action( 'cmb2_init', 'noc_frontend_new_project_form' );
/*
 * Register the form and fields for our front-end submission form
 */
function noc_frontend_new_project_form() {
    $prefix = 'noc_project_';

    $cmb = new_cmb2_box( array(
        'id'           => $prefix . 'frontend_new_project',
        'object_types' => array( 'noc_project' ),
        'hookup'       => false,
        'save_fields'  => false,
    ) );



    include(dirname( __FILE__ ) . '/parts/project-fields-tax.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-basic.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-contact.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-price.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-location.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-images.php');

}


add_shortcode( 'new-project-form', 'noc_do_frontend_new_project_form_shortcode' );
/**
 * Shortcode to display a CMB2 form for a post ID.
 * @param  array  $atts Shortcode attributes
 * @return string       Form HTML markup
 */
function noc_do_frontend_new_project_form_shortcode( $atts = array() ) {
	global $post;

	// Current user
    $user_id = get_current_user_id();

	/**
	 * Depending on your setup, check if the user has permissions to edit_posts
	 */
	if ( ! current_user_can( 'edit_posts' ) ) {
		return __( 'You do not have permissions to add new projects.', 'noc-functions' );
	}

    // Use ID of metabox in wds_frontend_form_register
    $metabox_id = 'noc_project_frontend_new_project';

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

    // Our CMB2 form stuff goes here

    // Get our form
    $output .= cmb2_get_metabox_form( $cmb, $object_id, array( 'save_button' => __( 'Submit Project', 'noc-functions' ) ) );


    return $output;
}