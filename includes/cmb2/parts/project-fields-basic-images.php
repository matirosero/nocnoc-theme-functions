<?php

	$cmb->add_field( array(
		'name' => esc_html__( 'Logo del proyecto', 'noc-functions' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'noc-functions' ),
		'id'   => $prefix . 'logo',
		'type' => 'file',
		'tab'  		=> 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );


	$cmb->add_field( array(
		'name' => esc_html__( 'Imagen principal', 'noc-functions' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'noc-functions' ),
		'id'   => '_thumbnail',
		'type' => 'file',
		'tab'  		=> 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );