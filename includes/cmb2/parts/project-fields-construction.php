<?php
	$cmb->add_field( array(
		'name'     	=> __( 'Información sobre constructora', 'noc-functions' ),
		'id'      	=> $prefix . 'construction-tile',
		'type'     	=> 'title',
		'tab'  => 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Logo de constructora', 'noc-functions' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'noc-functions' ),
		'id'   => $prefix . 'construction_logo',
		'type' => 'file',
		'tab'  		=> 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Nombre de constructora', 'noc-functions' ),
		'id'   => $prefix . 'construction_name',
		'type' => 'text_medium',
		'tab'  		=> 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Sitio de constructora', 'noc-functions' ),
		'id'   => $prefix . 'construction_url',
		'type' => 'text_url',
		'tab'  => 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
	) );