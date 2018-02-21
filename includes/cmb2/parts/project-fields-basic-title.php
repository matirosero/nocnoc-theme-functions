<?php


$cmb->add_field( array(
	'name'     	=> __( 'Información del proyecto', 'noc-functions' ),
	'id'      	=> $prefix . 'basic-tile',
	'type'     	=> 'title',
	'tab'  		=> 'description',
	'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
) );