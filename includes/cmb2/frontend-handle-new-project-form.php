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


    /*
     * Let's add these attributes as hidden fields to our cmb form
     * so that they will be passed through to our form submission
     */
    foreach ( $atts as $key => $value ) {
        $cmb->add_hidden_field( array(
            'field_args'  => array(
                'id'    => "atts[$key]",
                'type'  => 'hidden',
                'default' => $value,
            ),
        ) );
    }


    // Initiate our output variable
    $output = '<div id="post">';
    $output .= '<h2>TYPE: '.$type.' '.$package.'</h2>';


    // Handle form saving (if form has been submitted)
    $new_id = noc_handle_frontend_new_project_form_submission( $cmb, $atts );

    if ( $new_id ) {

        if ( is_wp_error( $new_id ) ) {

            // If there was an error with the submission, add it to our ouput.
            $output .= '<p class="callout alert error"><strong>' . __('Error', 'noc-function') . '</strong>: ' .  $new_id->get_error_message() . '</p>';

        } else {

            // Add notice of submission
            $output .= '<p class="callout success">' . sprintf( __( 'Your project has been submitted.', 'noc-function' ) ) . '</p>';
        }

    }

    /* TODO:
     * Check if user has projects available, then show form.
     */

    // Get our form
    $output .= cmb2_get_metabox_form( $cmb, $object_id, array( 'save_button' => __( 'Submit Project', 'noc-functions' ) ) );

    $output .= '</div>';

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

    // var_dump($cmb);

    // If no form submission, bail
    if ( empty( $_POST ) || ! isset( $_POST['submit-cmb'], $_POST['object_id'] ) ) {
        return false;
    }

    // check required $_POST variables and security nonce
    if (
        ! isset( $_POST['submit-cmb'], $_POST['object_id'], $_POST[ $cmb->nonce() ] )
        || ! wp_verify_nonce( $_POST[ $cmb->nonce() ], $cmb->nonce() )
    ) {
        return new WP_Error( 'security_fail', __( 'Security check failed.' ) );
    }

    if ( empty( $_POST['submitted_post_title'] ) ) {
        return new WP_Error( 'post_data_missing', __( 'New post requires a title.' ) );
    }

    if ( empty( $_POST['submitted_post_content'] ) ) {
        return new WP_Error( 'post_data_missing', __( 'New post requires a description.' ) );
    }

    if ( empty( $_POST['submitted_post_excerpt'] ) ) {
        return new WP_Error( 'post_data_missing', __( 'New post requires a short description.' ) );
    }

    // Do WordPress insert_post stuff
    // var_dump($_POST);

    // Fetch sanitized values
    $sanitized_values = $cmb->get_sanitized_values( $_POST );

    // Set our post data arguments
    $post_data['post_title']   = $sanitized_values['submitted_post_title'];
    unset( $sanitized_values['submitted_post_title'] );
    $post_data['post_content'] = $sanitized_values['submitted_post_content'];
    unset( $sanitized_values['submitted_post_content'] );
    $post_data['post_excerpt'] = $sanitized_values['submitted_post_excerpt'];
    unset( $sanitized_values['submitted_post_excerpt'] );


    // var_dump($sanitized_values);

    // var_dump($post_data);


    // TODO: enable actual post creation

    // Create the new post
    $new_submission_id = wp_insert_post( $post_data, true );

    // If we hit a snag, update the user
    if ( is_wp_error( $new_submission_id ) ) {
        return $new_submission_id;
    }

    //Not working
    // $cmb->save_fields( $new_submission_id, 'noc_project', $sanitized_values );


    /*
     * Taxonomies
     */

    $taxonomies = array();

    if ( isset($sanitized_values['noc_project_type']) ) {
        $taxonomies['noc_type'] = $sanitized_values['noc_project_type'];
        unset( $sanitized_values['noc_project_type'] );
    }

    if ( isset($sanitized_values['noc_project_plan']) ) {
        // $taxonomies['noc_plan'] = $sanitized_values['noc_project_plan'];
        unset( $sanitized_values['noc_project_plan'] );
    }

    if ( isset($sanitized_values['noc_project_stage_tax']) ) {
        $taxonomies['noc_stage']= $sanitized_values['noc_project_stage_tax'];
        unset( $sanitized_values['noc_project_stage_tax'] );
    }

    if ( isset($sanitized_values['noc_project_location_tax']) ) {
        $taxonomies['noc_location']= $sanitized_values['noc_project_location_tax'];
        unset( $sanitized_values['noc_project_location_tax'] );
    }

    if ( isset($sanitized_values['noc_project_board_tax']) ) {
        $taxonomies['noc_board']= $sanitized_values['noc_project_board_tax'];
        unset( $sanitized_values['noc_project_board_tax'] );
    }

    foreach ( $taxonomies as $taxonomy => $terms ) {
        wp_set_object_terms( $new_submission_id, $terms, $taxonomy, false );
    }


    // Loop through remaining (sanitized) data, and save to post-meta
    foreach ( $sanitized_values as $key => $value ) {
        update_post_meta( $new_submission_id, $key, $value );
    }



     /**
     * Other than post_type and post_status, we want
     * our uploaded attachment post to have the same post-data
     */
    unset( $post_data['post_type'] );
    unset( $post_data['post_status'] );

    // Try to upload the featured image
    $img_id = noc_frontend_form_photo_upload( $new_submission_id, $post_data );

    // If our photo upload was successful, set the featured image
    if ( $img_id && ! is_wp_error( $img_id ) ) {
        set_post_thumbnail( $new_submission_id, $img_id );
    }

    return $new_submission_id;
}



/**
 * Handles uploading a file to a WordPress post
 *
 * @param  int   $post_id              Post ID to upload the photo to
 * @param  array $attachment_post_data Attachement post-data array
 */
function noc_frontend_form_photo_upload( $post_id, $attachment_post_data = array() ) {
	// Make sure the right files were submitted
	if (
		empty( $_FILES )
		|| ! isset( $_FILES['_thumbnail'] )
		|| isset( $_FILES['_thumbnail']['error'] ) && 0 !== $_FILES['_thumbnail']['error']
	) {
		return;
	}
	// Filter out empty array values
	$files = array_filter( $_FILES['_thumbnail'] );
	// Make sure files were submitted at all
	if ( empty( $files ) ) {
		return;
	}
	// Make sure to include the WordPress media uploader API if it's not (front-end)
	if ( ! function_exists( 'media_handle_upload' ) ) {
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		require_once( ABSPATH . 'wp-admin/includes/media.php' );
	}
	// Upload the file and send back the attachment post ID
	return media_handle_upload( '_thumbnail', $post_id, $attachment_post_data );
}