<?php
/**
 * Custom template tags for Horizon Theme.
 *
 * @package Horizon_Theme
 */

/**
 * Pagination.
 *
 * @global array $wp_query   Current WP Query.
 * @global array $wp_rewrite URL rewrite rules.
 *
 * @param  int   $mid   Total of items that will show along with the current page.
 * @param  int   $end   Total of items displayed for the last few pages.
 * @param  bool  $show  Show all items.
 * @param  mixed $query Custom query.
 *
 * @return string       Return the pagination.
 */
function horizon_theme_pagination( $mid = 2, $end = 1, $show = false, $query = null ) {

	// Prevent show pagination number if Infinite Scroll of JetPack is active.
	if ( ! isset( $_GET[ 'infinity' ] ) ) {

		global $wp_query, $wp_rewrite;

		$total_pages = $wp_query->max_num_pages;

		if ( is_object( $query ) && null != $query ) {
			$total_pages = $query->max_num_pages;
		}

		if ( $total_pages > 1 ) {
			$url_base = $wp_rewrite->pagination_base;
			$big = 999999999;

			// Sets the paginate_links arguments.
			$arguments = apply_filters( 'horizon_theme_pagination_args', array(
					'base'      => esc_url_raw( str_replace( $big, '%#%', get_pagenum_link( $big, false ) ) ),
					'format'    => '',
					'current'   => max( 1, get_query_var( 'paged' ) ),
					'total'     => $total_pages,
					'show_all'  => $show,
					'end_size'  => $end,
					'mid_size'  => $mid,
					'type'      => 'list',
					'prev_text' => __( '&laquo; Previous', 'horizon-theme' ),
					'next_text' => __( 'Next &raquo;', 'horizon-theme' ),
				)
			);

			$pagination = '<div class="pagination-wrap">' . paginate_links( $arguments ) . '</div>';

			// Prevents duplicate bars in the middle of the url.
			if ( $url_base ) {
				$pagination = str_replace( '//' . $url_base . '/', '/' . $url_base . '/', $pagination );
			}

			return $pagination;
		}
	}
}

if ( ! function_exists( 'horizon_theme_posted_on' ) ) {

	/**
	 * Print HTML with meta information for the current post-date/time and author.
	 *
	 * @return void
	 */
	function horizon_theme_posted_on() {
		if ( is_sticky() && is_home() && ! is_paged() ) {
			echo '<span class="featured-post">' . __( 'Sticky', 'horizon-theme' ) . ' </span>';
		}

		// Set up and print post meta information.
		printf( '<span class="entry-date">%s <time class="entry-date" datetime="%s">%s</time></span> <span class="byline">%s <span class="author vcard"><a class="url fn n" href="%s" rel="author">%s</a></span>.</span>',
			__( 'Posted in', 'horizon-theme' ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			__( 'by', 'horizon-theme' ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author()
		);
	}
}

if ( ! function_exists( 'horizon_theme_paging_nav' ) ) {

	/**
	 * Print HTML with meta information for the current post-date/time and author.
	 *
	 * @return void
	 */
	function horizon_theme_paging_nav() {
		$mid  = 2;     // Total of items that will show along with the current page.
		$end  = 1;     // Total of items displayed for the last few pages.
		$show = false; // Show all items.

		echo horizon_theme_pagination( $mid, $end, false );
	}
}
