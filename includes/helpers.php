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
    wp_enqueue_script('cmb2-conditionals-frontend', plugins_url('/cmb2-conditionals-master/cmb2-conditionals.js'), array('jquery'), '1.0.2', true);
}
add_action('wp_enqueue_scripts', 'noc_theme_functions_enqueue_scripts');


// http://justintadlock.com/archives/2010/07/10/meta-capabilities-for-custom-post-types
add_filter( 'map_meta_cap', 'my_map_meta_cap', 10, 4 );

function my_map_meta_cap( $caps, $cap, $user_id, $args ) {

    /* If editing, deleting, or reading a project, get the post and post type object. */
    if ( 'edit_project' == $cap || 'delete_project' == $cap || 'read_project' == $cap ) {
        $post = get_post( $args[0] );
        $post_type = get_post_type_object( $post->post_type );

        /* Set an empty array for the caps. */
        $caps = array();
    }

    /* If editing a project, assign the required capability. */
    if ( 'edit_project' == $cap ) {
        if ( $user_id == $post->post_author )
            $caps[] = $post_type->cap->edit_posts;
        else
            $caps[] = $post_type->cap->edit_others_posts;
    }

    /* If deleting a project, assign the required capability. */
    elseif ( 'delete_project' == $cap ) {
        if ( $user_id == $post->post_author )
            $caps[] = $post_type->cap->delete_posts;
        else
            $caps[] = $post_type->cap->delete_others_posts;
    }

    /* If reading a private project, assign the required capability. */
    elseif ( 'read_project' == $cap ) {

        if ( 'private' != $post->post_status )
            $caps[] = 'read';
        elseif ( $user_id == $post->post_author )
            $caps[] = 'read';
        else
            $caps[] = $post_type->cap->read_private_posts;
    }

    /* Return the capabilities required by the user. */
    return $caps;
}