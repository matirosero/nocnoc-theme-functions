<?php

// Limit media library access to user's own uploads
add_filter( 'ajax_query_attachments_args', 'wpb_show_current_user_attachments' );

function wpb_show_current_user_attachments( $query ) {
    $user_id = get_current_user_id();
    if ( $user_id && !current_user_can('activate_plugins') && !current_user_can('edit_others_posts
') ) {
        $query['author'] = $user_id;
    }
    return $query;
}


// wp_enqueue_script('cmb2-conditionals', plugins_url('/cmb2-conditionals.js', 'path/to/CMB2_conditionals/file'), array('jquery'), '1.0.2', true);

function noc_theme_functions_enqueue_scripts() {

    /*
    * To make it work in frontend:
    * Add .cmb-form to triggers on line 280 of JS file:
    * CMB2ConditionalsInit( '.cmb-form', '.cmb-form .cmb2-wrap', '#post', '#post .cmb2-wrap' );
	*/
    wp_enqueue_script('cmb2-conditionals', plugins_url('/cmb2-conditionals-master/cmb2-conditionals.js'), array('jquery'), '1.0.2', true);
}
add_action('wp_enqueue_scripts', 'noc_theme_functions_enqueue_scripts');