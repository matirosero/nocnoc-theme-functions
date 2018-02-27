<?php

    $cmb->add_field( array(
        'name'           => esc_html__( 'Seleccionar tipo de proyecto', 'noc-functions' ),
        // 'desc'           => 'Description Goes Here',
        'id'             => $prefix . 'type_tax',
        'taxonomy'       => 'noc_type', //Enter Taxonomy Slug
        'type'           => 'taxonomy_radio',
        'remove_default' => 'true', // Removes the default metabox provided by WP core. Pending release as of Aug-10-16,
        'tab'       => 'description',
        'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
    ) );