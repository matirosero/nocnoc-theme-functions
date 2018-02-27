<?php

add_action( 'cmb2_init', 'noc_frontend_new_project_apartments_form' );
/*
 * Register the form and fields for our front-end submission form
 */
function noc_frontend_new_project_apartments_form() {
    global $frontend_metabox_array;

    //Change media label for non video projects
    $frontend_metabox_array['tabs']['media']['label'] = __( 'Images', 'noc-functions' );

    // $user_id = get_current_user_id();

    $prefix = 'noc_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'frontend_apartments';

    $cmb = new_cmb2_box( $frontend_metabox_array );

    // Choose boards separately
    // include(dirname( __FILE__ ) . '/parts/project-fields-tax.php');

    $cmb->add_field( array(
        'id'   => $prefix . 'type',
        'type' => 'hidden',
        'default' => 'basico',
    ) );

	
    // TAB: description
    include(dirname( __FILE__ ) . '/parts/project-fields-basic-title.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-basic-images.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-basic-content.php');
    include(dirname( __FILE__ ) . '/parts/project-fields-tax-stage.php');
	include(dirname( __FILE__ ) . '/parts/project-fields-apartments.php');

    include(dirname( __FILE__ ) . '/parts/project-fields-basic.php');

    // TAB: images
    include(dirname( __FILE__ ) . '/parts/project-fields-images.php');

    // TAB: price
    include(dirname( __FILE__ ) . '/parts/project-fields-price.php');
    
    // TAB: location
    include(dirname( __FILE__ ) . '/parts/project-fields-location.php');
    
    // TAB: contact
    include(dirname( __FILE__ ) . '/parts/project-fields-contact.php');

    // TAB: boards
    include(dirname( __FILE__ ) . '/parts/project-fields-boards.php');

    // var_dump($cmb->meta_box['fields']['noc_project_apartment_sizes']);
}


add_action( 'cmb2_init', 'noc_frontend_new_premium_project_apartments_form' );
/*
 * Register the form and fields for our front-end submission form
 */
function noc_frontend_new_premium_project_apartments_form() {
    global $frontend_metabox_array;

    // $user_id = get_current_user_id();

    $prefix = 'noc_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'frontend_apartments_premium';

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

    $prefix = 'noc_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'frontend_apartments_super';

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

    $prefix = 'noc_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'frontend_houses';

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

    $prefix = 'noc_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'frontend_houses_premium';

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

    $prefix = 'noc_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'frontend_houses_super';

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

    $prefix = 'noc_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'frontend_lots';

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

    $prefix = 'noc_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'frontend_lots_premium';

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

    $prefix = 'noc_project_';
    // var_dump($frontend_metabox_array);

    $frontend_metabox_array['id'] = $prefix . 'frontend_lots_super';

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

