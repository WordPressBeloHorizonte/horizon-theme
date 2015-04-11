jQuery(document).ready(function($) {

	$('.carousel').owlCarousel({



	      items : 5
	      /*temsDesktop : [1199,3],
	      itemsDesktopSmall : [979,3]*/

  	});
	// fitVids.
	$( '.entry-content' ).fitVids();

	// Responsive wp_video_shortcode().
	$( '.wp-video-shortcode' ).parent( 'div' ).css( 'width', 'auto' );

	/**
	 * Horizon Theme Core shortcodes
	 */

	// Tabs.
	$( '.odin-tabs a' ).click(function(e) {
		e.preventDefault();
		$(this).tab( 'show' );
	});

	// Tooltip.
	//$( '.odin-tooltip' ).tooltip();

});
