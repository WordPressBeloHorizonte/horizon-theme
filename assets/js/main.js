jQuery(document).ready(function($) {

	$('.carousel').owlCarousel({
	      items : 5
  	});

	// fitVids.
	$( '.entry-content' ).fitVids();

	// Responsive wp_video_shortcode().
	$( '.wp-video-shortcode' ).parent( 'div' ).css( 'width', 'auto' );

	/**
	 * Horizon Theme Core shortcodes
	 */

	// Tooltip.
	//$( '.odin-tooltip' ).tooltip();
});
