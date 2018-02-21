<?php

$tabs_array = array(
	'description'  => array(
		'label' => __( 'Description', 'cmb2' ),
		// 'icon'  => 'dashicons-share', // Dashicon
	),
	'media'  => array(
		'label' => __( 'Images & video', 'cmb2' ),
		// 'icon'  => 'dashicons-share', // Dashicon
	),
	'price'  => array(
		'label' => __( 'Price', 'cmb2' ),
		// 'icon'  => 'dashicons-share', // Dashicon
	),
	'location'  => array(
		'label' => __( 'Location', 'cmb2' ),
		// 'icon'  => 'dashicons-location-alt', // Dashicon
	),
	'contact' => array(
		'label' => __( 'Contact', 'cmb2' ),
		//'show_on_cb' => 'yourprefix_show_if_front_page',
	),
);

$frontend_metabox_array = array(
    // 'id'           => $prefix . 'apartments',
    'object_types' => array( 'noc_project' ),
    'hookup'       => false,
    'save_fields'  => false,
    'tabs'      => $tabs_array,
	'tab_style'   => 'default',
);

add_action( 'cmb2_init', 'noc_frontend_new_project_apartments_form' );
/*
 * Register the form and fields for our front-end submission form
 */
function noc_frontend_new_project_apartments_form() {
    global $frontend_metabox_array;

    // $user_id = get_current_user_id();

    $prefix = 'noc_frontend_new_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'apartments';

    $cmb = new_cmb2_box( $frontend_metabox_array );

    // Choose boards separately
    // include(dirname( __FILE__ ) . '/parts/project-fields-tax.php');

	include(dirname( __FILE__ ) . '/parts/project-fields-basic-title.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-basic-images.php');
	// include(dirname( __FILE__ ) . '/parts/project-fields-basic-content.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-apartments.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-basic.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-images.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-price.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-location.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-contact.php');



}


add_shortcode( 'new-project-form', 'noc_do_frontend_new_project_form_shortcode' );
/**
 * Shortcode to display a CMB2 form for a post ID.
 * @param  array  $atts Shortcode attributes
 * @return string       Form HTML markup
 */
function noc_do_frontend_new_project_form_shortcode( $atts = array() ) {
	global $post;

	extract( shortcode_atts( array(
		'type' => 'torres'
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

    if ( $type == 'torres') {
    	$metabox_id = 'noc_frontend_new_project_apartments';
    } elseif ( $type == 'casas') {
    	$metabox_id = 'noc_frontend_new_project_houses';
    } elseif ( $type == 'lotes') {
    	$metabox_id = 'noc_frontend_new_project_ots';
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
    $output .= '<h2>TYPE: '.$type.'</h2>';

    // Our CMB2 form stuff goes here

    // Get our form
    $output .= cmb2_get_metabox_form( $cmb, $object_id, array( 'save_button' => __( 'Submit Project', 'noc-functions' ) ) );


    return $output;
}