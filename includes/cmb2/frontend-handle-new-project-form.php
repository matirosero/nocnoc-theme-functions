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
    // $metabox_id = 'noc_project_frontend_apartments';

    if ( $type == 'torres' && $package == 'basico') {
    	$metabox_id = 'noc_project_frontend_apartments';
    } elseif ( $type == 'torres' && $package == 'premium') {
    	$metabox_id = 'noc_project_frontend_apartments_premium';
    } elseif ( $type == 'torres' && $package == 'super') {
    	$metabox_id = 'noc_project_frontend_apartments_super';
    } elseif ( $type == 'casas' && $package == 'basico') {
    	$metabox_id = 'noc_project_frontend_houses';
    } elseif ( $type == 'lotes' && $package == 'basico') {
    	$metabox_id = 'noc_project_frontend_lots';
    } elseif ( $type == 'casas' && $package == 'premium') {
        $metabox_id = 'noc_project_frontend_houses_premium';
    } elseif ( $type == 'lotes' && $package == 'premium') {
        $metabox_id = 'noc_project_frontend_lots_premium';
    } elseif ( $type == 'casas' && $package == 'super') {
        $metabox_id = 'noc_project_frontend_houses_super';
    } elseif ( $type == 'lotes' && $package == 'super') {
        $metabox_id = 'noc_project_frontend_lots_super';
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


    // Handle form saving (if form has been submitted)
    $new_id = noc_handle_frontend_new_project_form_submission( $cmb, $atts );

    if ( $new_id ) {

        if ( is_wp_error( $new_id ) ) {

            // If there was an error with the submission, add it to our ouput.
            $output .= '<p class="callout alert error"><strong>' . __('Error', 'noc-function') . '</strong>: ' .  $new_id->get_error_message() . '</p>';

        } else {

            // Add notice of submission
            $output .= '<p class="callout success">' . sprintf( __( 'Your project has been submitted, %s.', 'noc-function' ), esc_html( $name ) ) . '</p>';
        }

    }

   
    // Get our form
    $output .= cmb2_get_metabox_form( $cmb, $object_id, array( 'save_button' => __( 'Submit Project', 'noc-functions' ) ) );


    return $output;
}


/**
 * Handles form submission on save
 *
 * @param  CMB2  $cmb       The CMB2 object
 * @param  array $post_data Array of post-data for new post
 * @return mixed            New post ID if successful
 */
function noc_handle_frontend_new_project_form_submission( $cmb, $post_data = array() ) {

    // If no form submission, bail
    if ( empty( $_POST ) ) {
        return false;
    }

    // check required $_POST variables and security nonce
    if (
        ! isset( $_POST['submit-cmb'], $_POST['object_id'], $_POST[ $cmb->nonce() ] )
        || ! wp_verify_nonce( $_POST[ $cmb->nonce() ], $cmb->nonce() )
    ) {
        return new WP_Error( 'security_fail', __( 'Security check failed.' ) );
    }

    if ( empty( $_POST['noc_frontend_new_project_title'] ) ) {
        return new WP_Error( 'post_data_missing', __( 'New post requires a title.' ) );
    }

    // Do WordPress insert_post stuff
    var_dump($_POST);

    // Fetch sanitized values
    $sanitized_values = $cmb->get_sanitized_values( $_POST );

    // Set our post data arguments
    $post_data['post_title']   = $sanitized_values['submitted_post_title'];
    unset( $sanitized_values['submitted_post_title'] );
    $post_data['post_content'] = $sanitized_values['submitted_post_content'];
    unset( $sanitized_values['submitted_post_content'] );
    
    // return $new_submission_id;
}