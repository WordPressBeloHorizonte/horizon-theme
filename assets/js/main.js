jQuery(document).ready(function() {

	jQuery('.carousel').owlCarousel({
	      items : 5
  	});

	// fitVids.
	jQuery( '.entry-content' ).fitVids();

	// Responsive wp_video_shortcode().
	jQuery( '.wp-video-shortcode' ).parent( 'div' ).css( 'width', 'auto' );

	/**
	 * Horizon Theme Core shortcodes
	 */

	// Tooltip.
	//$( '.odin-tooltip' ).tooltip();
});
