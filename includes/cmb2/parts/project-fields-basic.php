<?php

	//Change to repeater with limit 
	//https://github.com/CMB2/CMB2-Snippet-Library/blob/master/javascript/limit-number-of-repeat-groups.php
	$cmb->add_field( array(
		'name' => esc_html__( 'Amenidades', 'noc-functions' ),
		'desc' => esc_html__( 'One per line', 'noc-functions' ),
		'id'   => $prefix . 'amenities',
		'type' => 'textarea_small',
		'tab'  		=> 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );

	//Change to repeater with limit 
	//https://github.com/CMB2/CMB2-Snippet-Library/blob/master/javascript/limit-number-of-repeat-groups.php
	$cmb->add_field( array(
		'name' => esc_html__( 'Facilidades', 'noc-functions' ),
		'desc' => esc_html__( 'One per line', 'noc-functions' ),
		'id'   => $prefix . 'characteristics',
		'type' => 'textarea_small',
		'tab'  		=> 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );

