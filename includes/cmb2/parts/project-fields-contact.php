<?php

	$cmb->add_field( array(
		'name'     => __( 'Información de contacto', 'noc-functions' ),
		'id'       => $prefix . 'contact-tile',
		'type'     => 'title',
		'tab'  => 'contact',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );


	$cmb->add_field( array(
		'name' => __( 'Phone number', 'noc-functions' ),
		'desc' => __( 'Numbers only: 00000000', 'noc-functions' ),
		'id'   => $prefix . 'phone',
		'type' => 'text',
		'attributes' => array(
			// 'type' => 'number',
			'pattern' => '\d*',
			'placeholder' => '00000000',
		),
		'tab'  => 'contact',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
		'sanitization_cb' => 'absint',
        // 'escape_cb'       => 'absint',
	) );


	// TODO: +506?
	$cmb->add_field( array(
		'name' => __( 'Whatsapp number', 'noc-functions' ),
		'desc' => __( 'Numbers only: 00000000', 'noc-functions' ),
		'id'   => $prefix . 'whatsapp',
		'type' => 'text',
		'attributes' => array(
			// 'type' => 'number',
			'pattern' => '\d*',
			'placeholder' => '00000000',
		),
		'tab'  => 'contact',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
		'sanitization_cb' => 'absint',
	    // 'escape_cb'       => 'absint',
	) );


	$cmb->add_field( array(
		'name' => esc_html__( 'Email', 'noc-functions' ),
		'id'   => $prefix . 'email',
		'type' => 'text_email',
		'tab'  => 'contact',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );

	
	$cmb->add_field( array(
		'name' => esc_html__( 'Website URL', 'noc-functions' ),
		'id'   => $prefix . 'url',
		'type' => 'text_url',
		'tab'  => 'contact',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
	) );


	$cmb->add_field( array(
		'name' => esc_html__( 'Schedule', 'noc-functions' ),
		// 'desc' => esc_html__( 'field description (optional)', 'noc-functions' ),
		'id'   => $prefix . 'schedule',
		'type' => 'textarea_small',
		'tab'  => 'contact',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );