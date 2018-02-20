<?php

	$cmb->add_field( array(
		'name'     => __( 'Información de contacto', 'noc-functions' ),
		'id'       => $prefix . 'contact-tile',
		'type'     => 'title',
	) );


	$cmb->add_field( array(
		'name' => __( 'Phone number', 'noc-functions' ),
		'desc' => __( 'Numbers only: 00000000', 'noc-functions' ),
		'id'   => $prefix . 'phone',
		'type' => 'text',
		'attributes' => array(
			'type' => 'number',
			'pattern' => '\d*',
		),
		'sanitization_cb' => 'absint',
	        'escape_cb'       => 'absint',
	) );


	$cmb->add_field( array(
		'name' => __( 'Whatsapp number', 'noc-functions' ),
		'desc' => __( 'Numbers only: 00000000', 'noc-functions' ),
		'id'   => $prefix . 'whatsapp',
		'type' => 'text',
		'attributes' => array(
			'type' => 'number',
			'pattern' => '\d*',
		),
		'sanitization_cb' => 'absint',
	        'escape_cb'       => 'absint',
	) );


	$cmb->add_field( array(
		'name' => esc_html__( 'Email', 'noc-functions' ),
		'id'   => $prefix . 'email',
		'type' => 'text_email',
	) );

	
	$cmb->add_field( array(
		'name' => esc_html__( 'Website URL', 'noc-functions' ),
		'id'   => $prefix . 'url',
		'type' => 'text_url',
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
	) );


	$cmb->add_field( array(
		'name' => esc_html__( 'Schedule', 'noc-functions' ),
		// 'desc' => esc_html__( 'field description (optional)', 'noc-functions' ),
		'id'   => $prefix . 'schedule',
		'type' => 'textarea_small',
	) );