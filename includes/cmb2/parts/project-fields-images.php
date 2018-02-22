<?php

	// $cmb->add_field( array(
	// 	'name'     	=> __( 'Imágenes y video', 'noc-functions' ),
	// 	'id'      	=> $prefix . 'basic-tile',
	// 	'type'     	=> 'title',
	// 	'tab'  		=> 'media',
	// 	'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	// ) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Imagen principal', 'noc-functions' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'noc-functions' ),
		'id'   => '_thumbnail',
		'type' => 'file',
		'tab'  => 'media',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );

	$cmb->add_field( array(
		'name'         => esc_html__( 'Imágenes adicionales', 'noc-functions' ),
		'desc'         => esc_html__( 'Upload or add multiple images/attachments.', 'noc-functions' ),
		'id'           => $prefix . 'gallery',
		'type'         => 'file_list',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
		'tab'  => 'media',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );