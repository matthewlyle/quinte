<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package quinte
 */

if ( ! function_exists( 'quinte_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function quinte_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x( 'Posted on %s', 'post date', 'quinte' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		_x( 'by %s', 'post author', 'quinte' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';

}
endif;

if ( ! function_exists( 'quinte_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function quinte_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		echo '<ul>';
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( __( ', ', 'quinte' ) );
		if ( $categories_list && quinte_categorized_blog() ) {
			printf( '<li class="cat-links">' . __( '<i class="fa fa-archive"></i> %1$s', 'quinte' ) . '</li>', $categories_list );
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', __( ', ', 'quinte' ) );
		if ( $tags_list ) {
			printf( '<li class="tags-links">' . __( '<i class="fa fa-tags"></i> %1$s', 'quinte' ) . '</li>', $tags_list );
		}
	}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<li class="comments-link"><i class="fa fa-comments"></i> ';
		comments_popup_link( __( 'Leave a comment', 'quinte' ), __( '1 Comment', 'quinte' ), __( '% Comments', 'quinte' ) );
		echo '</li>';
	}

	edit_post_link( __( '<i class="fa fa-pen"></i> Edit', 'quinte' ), '<li class="edit-link">', '</li>' );
		echo '</ul>';

}
endif;


/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function quinte_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'quinte_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'quinte_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so quinte_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so quinte_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in quinte_categorized_blog.
 */
function quinte_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'quinte_categories' );
}
add_action( 'edit_category', 'quinte_category_transient_flusher' );
add_action( 'save_post',     'quinte_category_transient_flusher' );
