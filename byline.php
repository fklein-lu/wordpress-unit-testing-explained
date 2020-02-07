<?php
/*
Plugin Name: Byline
Version: 1.0.0
*/

/**
 * Output the post byline.
 *
 * @param string $author_name Name of the post author.
 *
 * @return string Post byline.
 */
function get_byline( $author_name ) {
	if ( ! is_string( $author_name ) ) {
		return '';
	}

	return 'Written by ' . $author_name;
}

/**
 * Output the post byline for a user id.
 *
 * @param string $author_name User id of the post author.
 *
 * @return string Post byline.
 */
function get_byline_for_user_id( $author_id ) {
	$author_object = get_user_by( 'id', $author_id );

	if ( ! $author_object instanceof WP_User ) {
		return '';
	}

	return get_byline( $author_object->display_name );
}
