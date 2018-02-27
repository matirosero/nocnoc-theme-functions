<?php

$tabs_array = array(
	'description'  => array(
		'label' => __( 'Description', 'noc-functions' ),
		// 'icon'  => 'dashicons-share', // Dashicon
	),
	'media'  => array(
		'label' => __( 'Images & video', 'noc-functions' ),
		// 'icon'  => 'dashicons-share', // Dashicon
	),
	'price'  => array(
		'label' => __( 'Price', 'noc-functions' ),
		// 'icon'  => 'dashicons-share', // Dashicon
	),
	'location'  => array(
		'label' => __( 'Location', 'noc-functions' ),
		// 'icon'  => 'dashicons-location-alt', // Dashicon
	),
	'contact' => array(
		'label' => __( 'Contact', 'noc-functions' ),
		//'show_on_cb' => 'yourprefix_show_if_front_page',
	),
    'boards'  => array(
        'label' => __( 'Tableros', 'noc-functions' ),
        // 'icon'  => 'dashicons-location-alt', // Dashicon
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

    //Change media label for non video projects
    $frontend_metabox_array['tabs']['media']['label'] = __( 'Images', 'noc-functions' );

    // $user_id = get_current_user_id();

    $prefix = 'noc_frontend_new_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'apartments';

    $cmb = new_cmb2_box( $frontend_metabox_array );

    // Choose boards separately
    // include(dirname( __FILE__ ) . '/parts/project-fields-tax.php');

    $cmb->add_field( array(
        'id'   => $prefix . 'type',
        'type' => 'hidden',
        'default' => 'basico',
    ) );

	include(dirname( __FILE__ ) . '/parts/project-fields-basic-title.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-basic-images.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-basic-content.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-apartments.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-basic.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-images.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-price.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-location.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-contact.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-boards.php');
}


add_action( 'cmb2_init', 'noc_frontend_new_premium_project_apartments_form' );
/*
 * Register the form and fields for our front-end submission form
 */
function noc_frontend_new_premium_project_apartments_form() {
    global $frontend_metabox_array;

    // $user_id = get_current_user_id();

    $prefix = 'noc_frontend_new_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'apartments_premium';

    $cmb = new_cmb2_box( $frontend_metabox_array );
    
    $cmb->add_field( array(
        'id'   => $prefix . 'type',
        'type' => 'hidden',
        'default' => 'premium',
    ) );

    // Choose boards separately
    // include(dirname( __FILE__ ) . '/parts/project-fields-tax.php');
    $cmb->add_field( array(
    	'name'     	=> __( 'Información del proyecto', 'noc-functions' ),
    	'id'      	=> $prefix . 'description-tile',
    	'type'     	=> 'title',
    	'tab'  => 'description',
    	'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
    ) );

	include(dirname( __FILE__ ) . '/parts/project-fields-basic-title.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-basic-images.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-basic-content.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-apartments.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-basic.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-pdf.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-construction.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-images.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-video.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-price.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-location.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-contact.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-boards.php');

}

add_action( 'cmb2_init', 'noc_frontend_new_super_project_apartments_form' );
/*
 * Register the form and fields for our front-end submission form
 */
function noc_frontend_new_super_project_apartments_form() {
    global $frontend_metabox_array;

    // $user_id = get_current_user_id();

    $prefix = 'noc_frontend_new_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'apartments_super';

    $cmb = new_cmb2_box( $frontend_metabox_array );
    
    $cmb->add_field( array(
        'id'   => $prefix . 'type',
        'type' => 'hidden',
        'default' => 'super',
    ) );

    // Choose boards separately
    // include(dirname( __FILE__ ) . '/parts/project-fields-tax.php');
    $cmb->add_field( array(
        'name'      => __( 'Información del proyecto', 'noc-functions' ),
        'id'        => $prefix . 'description-tile',
        'type'      => 'title',
        'tab'  => 'description',
        'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
    ) );

    include(dirname( __FILE__ ) . '/parts/project-fields-basic-title.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-images.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-content.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-apartments.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-basic.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-pdf.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-construction.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-images.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-video.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-price.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-location.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-contact.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-boards.php');

}


add_action( 'cmb2_init', 'noc_frontend_new_project_houses_form' );
/*
 * Register the form and fields for our front-end submission form
 */
function noc_frontend_new_project_houses_form() {
    global $frontend_metabox_array;

    //Change media label for non video projects
    $frontend_metabox_array['tabs']['media']['label'] = __( 'Images', 'noc-functions' );

    // $user_id = get_current_user_id();

    $prefix = 'noc_frontend_new_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'houses';

    $cmb = new_cmb2_box( $frontend_metabox_array );

    // Choose boards separately
    // include(dirname( __FILE__ ) . '/parts/project-fields-tax.php');

    $cmb->add_field( array(
        'id'   => $prefix . 'type',
        'type' => 'hidden',
        'default' => 'basico',
    ) );

    include(dirname( __FILE__ ) . '/parts/project-fields-basic-title.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-images.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-content.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-houses.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-basic.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-images.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-price.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-location.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-contact.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-boards.php');

}


add_action( 'cmb2_init', 'noc_frontend_new_premium_project_houses_form' );
/*
 * Register the form and fields for our front-end submission form
 */
function noc_frontend_new_premium_project_houses_form() {
    global $frontend_metabox_array;

    // $user_id = get_current_user_id();

    $prefix = 'noc_frontend_new_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'houses_premium';

    $cmb = new_cmb2_box( $frontend_metabox_array );

    $cmb->add_field( array(
        'id'   => $prefix . 'type',
        'type' => 'hidden',
        'default' => 'premium',
    ) );

    // Choose boards separately
    // include(dirname( __FILE__ ) . '/parts/project-fields-tax.php');
    $cmb->add_field( array(
        'name'      => __( 'Información del proyecto', 'noc-functions' ),
        'id'        => $prefix . 'description-tile',
        'type'      => 'title',
        'tab'  => 'description',
        'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
    ) );
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-title.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-images.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-content.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-houses.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-basic.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-pdf.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-construction.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-images.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-video.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-price.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-location.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-contact.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-boards.php');

}

add_action( 'cmb2_init', 'noc_frontend_new_super_project_houses_form' );
/*
 * Register the form and fields for our front-end submission form
 */
function noc_frontend_new_super_project_houses_form() {
    global $frontend_metabox_array;

    // $user_id = get_current_user_id();

    $prefix = 'noc_frontend_new_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'houses_super';

    $cmb = new_cmb2_box( $frontend_metabox_array );

    $cmb->add_field( array(
        'id'   => $prefix . 'type',
        'type' => 'hidden',
        'default' => 'super',
    ) );

    // Choose boards separately
    // include(dirname( __FILE__ ) . '/parts/project-fields-tax.php');
    $cmb->add_field( array(
        'name'      => __( 'Información del proyecto', 'noc-functions' ),
        'id'        => $prefix . 'description-tile',
        'type'      => 'title',
        'tab'  => 'description',
        'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
    ) );
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-title.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-images.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-content.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-houses.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-basic.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-pdf.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-construction.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-images.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-video.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-price.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-location.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-contact.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-boards.php');

}


add_action( 'cmb2_init', 'noc_frontend_new_project_lots_form' );
/*
 * Register the form and fields for our front-end submission form
 */
function noc_frontend_new_project_lots_form() {
    global $frontend_metabox_array;

    //Change media label for non video projects
    $frontend_metabox_array['tabs']['media']['label'] = __( 'Images', 'noc-functions' );

    // $user_id = get_current_user_id();

    $prefix = 'noc_frontend_new_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'lots';

    $cmb = new_cmb2_box( $frontend_metabox_array );

    // Choose boards separately
    // include(dirname( __FILE__ ) . '/parts/project-fields-tax.php');

    $cmb->add_field( array(
        'id'   => $prefix . 'type',
        'type' => 'hidden',
        'default' => 'basico',
    ) );

    include(dirname( __FILE__ ) . '/parts/project-fields-basic-title.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-images.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-content.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-lots.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-basic.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-images.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-price.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-location.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-contact.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-boards.php');

}


add_action( 'cmb2_init', 'noc_frontend_new_premium_project_lots_form' );
/*
 * Register the form and fields for our front-end submission form
 */
function noc_frontend_new_premium_project_lots_form() {
    global $frontend_metabox_array;

    // $user_id = get_current_user_id();

    $prefix = 'noc_frontend_new_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'lots_premium';

    $cmb = new_cmb2_box( $frontend_metabox_array );

    $cmb->add_field( array(
        'id'   => $prefix . 'type',
        'type' => 'hidden',
        'default' => 'premium',
    ) );

    // Choose boards separately
    // include(dirname( __FILE__ ) . '/parts/project-fields-tax.php');
    $cmb->add_field( array(
        'name'      => __( 'Información del proyecto', 'noc-functions' ),
        'id'        => $prefix . 'description-tile',
        'type'      => 'title',
        'tab'  => 'description',
        'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
    ) );
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-title.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-images.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-content.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-lots.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-basic.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-pdf.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-construction.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-images.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-video.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-price.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-location.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-contact.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-boards.php');

}

add_action( 'cmb2_init', 'noc_frontend_new_super_project_lots_form' );
/*
 * Register the form and fields for our front-end submission form
 */
function noc_frontend_new_super_project_lots_form() {
    global $frontend_metabox_array;

    // $user_id = get_current_user_id();

    $prefix = 'noc_frontend_new_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'lots_super';

    $cmb = new_cmb2_box( $frontend_metabox_array );

    $cmb->add_field( array(
        'id'   => $prefix . 'type',
        'type' => 'hidden',
        'default' => 'super',
    ) );
    
    // Choose boards separately
    // include(dirname( __FILE__ ) . '/parts/project-fields-tax.php');
    $cmb->add_field( array(
        'name'      => __( 'Información del proyecto', 'noc-functions' ),
        'id'        => $prefix . 'description-tile',
        'type'      => 'title',
        'tab'  => 'description',
        'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
    ) );
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-title.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-images.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-content.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-lots.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-basic.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-pdf.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-construction.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-images.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-video.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-price.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-location.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-contact.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-boards.php');

}

