<?php

	$cmb->add_field( array(
		'name'    => __( 'Brochure PDF', 'noc-functions' ),
		'id'      => $prefix . 'pdf',
		'type'    => 'file',
		'options' => array(
			'add_upload_file_text' => 'Upload PDF',
		),
		'tab'  => 'description',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );