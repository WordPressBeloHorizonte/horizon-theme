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

if ( ! function_exists( 'horizon_get_theme_mod' ) ) {

	function horizon_get_theme_mod( $name ) {
		$default = isset( Horizon_Theme_Customize::$defaults[$name] ) ? Horizon_Theme_Customize::$defaults[$name] : '';
		return get_theme_mod( $name, $default );
	}
}


if ( ! function_exists('horizon_header_with_image') ) {

	/**
	 * Print a Horizon header with image
	 *
	 * @param $title		The title of the header (allows the use of span to colorize a word)
	 * @param $description 	The description of the header
	 * @param $image_url	The Image URL to display within the header
	 * @param string $alt	The alt image attribute
	 */
	function horizon_header_with_image( $title, $description, $image_url, $alt = '') {
		?>
			<header class="horizon-header">
				<h2 class="title"><?php echo wp_kses( $title, array('span' => array() ) ); ?></h2>
				<span class="sep"></span>
				<p class="desc"><?php echo esc_html( $description ); ?></p>
				<figure class="banner-blog col-lg-12">
					<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo $alt; ?>">
				</figure><!-- .banner-blog -->
			</header><!-- .horizon-header -->
		<?php
	}
}

if ( ! function_exists('horizon_header') ) {

	/**
	 * Print a  Horizon header with blockquote
	 *
	 * @param $title		The title of the header (allows the use of span to colorize a word)
	 * @param $description 	The description of the header
	 */
	function horizon_header( $title, $description, $blockquote = '') {
		?>
		<header class="horizon-header">
			<h2 class="title"><?php echo wp_kses( $title, array('span' => array() ) ); ?></h2>
			<span class="sep"></span>
			<p class="desc"><?php echo esc_html( $description ); ?></p>
		</header><!-- .horizon-header -->

		<?php if ( ! empty( $blockquote ) ) : ?>
			<blockquote class="horizon-blockquote">
				<p><?php echo esc_html( $blockquote ); ?></p>
			</blockquote>
		<?php endif; ?>
	<?php
	}
}

/**
 * Functions for Woocomerce Homepage Control
 */

if ( ! function_exists( 'horizon_about_section' ) ) {

	/**
	 * Print HTML with the About section
	 *
	 * @return void
	 */
	function horizon_about_section() {
		get_template_part('inc/partials/homepage', 'about');
	}
}

if ( ! function_exists( 'horizon_separator') ) {
	/**
	 * Print HTML for Horizon Separator
	 *
	 * @return void
	 */
	function horizon_separator() {
		get_template_part('inc/partials/homepage', 'separator');
	}
}

if ( ! function_exists( 'horizon_second_separator') ) {
	/**
	 * Print HTML for Horizon Separator
	 *
	 * @return void
	 */
	function horizon_second_separator() {
		get_template_part('inc/partials/homepage', 'separator');
	}
}

if ( ! function_exists( 'horizon_services_section') ) {
	/**
	 * Print HTML for Horizon services section
	 *
	 * @return void
	 */
	function horizon_services_section() {
		get_template_part('inc/partials/homepage', 'services');
	}
}

if ( ! function_exists( 'horizon_blog_section' ) ) {

	/**
	 * Print HTML for Horizon Blog section
	 *
	 * @return void
	 */
	function horizon_blog_section() {
		get_template_part('inc/partials/homepage', 'blog');
	}
}

if ( ! function_exists( 'horizon_clients_section' ) ) {

	/**
	 * Print HTML for Horizon Clients Sections
	 *
	 * @return void
	 */
	function horizon_clients_section() {
		get_template_part('inc/partials/homepage', 'clients');
	}
}

if ( ! function_exists( 'horizon_contact_section' ) ) {

	/**
	 * Print HTML for Horizon Contact Section
	 *
	 * @return void
	 */
	function horizon_contact_section() {
		get_template_part('inc/partials/homepage', 'contact');
	}
}

if ( ! function_exists( 'horizon_services_section' ) ) {

	/**
	 * Print HTML for Horizon Services Section
	 *
	 * @return void
	 */
	function horizon_services_section() {
		get_template_part('inc/partials/homepage', 'services');
	}
}

if ( ! function_exists( 'horizon_skills_section' ) ) {

	/**
	 * Print HTML for Horizon skills section
	 *
	 * @return void
	 */
	function horizon_skills_section() {
		get_template_part('inc/partials/homepage', 'skills');
	}
}

if ( ! function_exists( 'horizon_portfolio_section' ) ) {

	/**
	 * Print HTML for Horizon Portfolio Section
	 *
	 * @return void
	 */
	function horizon_portfolio_section() {
		get_template_part('inc/partials/homepage', 'portfolio');
	}
}
