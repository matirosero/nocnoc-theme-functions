<?php

/**
 * Taxonomy show_on filter
 * @author Bill Erickson
 * @param  object $cmb CMB2 object
 * @return bool        True/false whether to show the metabox
 */
function noc_taxonomy_show_on_filter( $cmb ) {
	$tax_terms_to_show_on = $cmb->prop( 'show_on_terms', array() );
	if ( empty( $tax_terms_to_show_on ) || ! $cmb->object_id() ) {
		return false;
	}
	$post_id = $cmb->object_id();
	$post = get_post( $post_id );
	foreach( (array) $tax_terms_to_show_on as $taxonomy => $slugs ) {
		if ( ! is_array( $slugs ) ) {
			$slugs = array( $slugs );
		}
		$terms = $post
			? get_the_terms( $post, $taxonomy )
			: wp_get_object_terms( $post_id, $taxonomy );
		if ( ! empty( $terms ) ) {
			foreach( $terms as $term ) {
				if ( in_array( $term->slug, $slugs, true ) ) {
					// Ok, show this metabox
					return true;
				}
			}
		}
	}
	return false;
}