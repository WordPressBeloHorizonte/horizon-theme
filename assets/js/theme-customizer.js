(function( $ ) {
	"use strict";
	//Images
	wp.customize( 'logo' , function( value ) {
		value.bind( function( to ) {
			var $logo = $( '.customizer-logo' );

			if ( to.length > 0 ) {
				if ( $logo.length > 0 ) {
					$logo.attr('src', to).show();
				} else {
					/**
					  * The logo isn't being display on the site,
					  * so we need to build a html element.
					  */
					$('.navbar-header').append(
						"<a class='navbar-brand' href='#' rel='home'>" +
							"<img src='" + to + "' />" +
						"</a>"
					);
				}

			}
			else {
				$logo.hide();
			}
		} );
	});

	wp.customize( 'banner_icon' , function( value ) {
		value.bind( function( to ) {
			var $icon = $( '.customizer-banner-icon' );
			if ( to.length > 0 ) {
				if ( $icon.length > 0 ) {
					$icon.attr('src', to).show();
				} else {
					/**
					 * The icon isn't being display on the site,
					 * so we need to build a html element.
					 */
					$('#banner .description').prepend(
						"<img class='horizon-icon customizer-banner-icon' " +
							"src=" + to + " />"
					);
				}
			}
			else {
				$icon.hide();
			}

		} );
	});



	//Banner
	wp.customize( 'banner_title' , function( value ) {
		value.bind( function( to ) {
			$( '.customizer-banner-title' ).html(to);
		} );
	});

	wp.customize( 'banner_subtitle' , function( value ) {
		value.bind( function( to ) {
			$( '.customizer-banner-subtitle' ).html(to);
		} );
	});

	//Footer
	wp.customize( 'contact_info' , function( value ) {
		value.bind( function( to ) {
			$( '.customizer-contact_info' ).html(to);
		} );
	});

	wp.customize( 'address' , function( value ) {
		value.bind( function( to ) {
			$( '.customizer-address' ).html(to);
		} );
	});

	wp.customize( 'gplus' , function( value ) {
		value.bind( function( to ) {
			$( '.customizer-gplus' ).attr('href',to);
		} );
	});

	wp.customize( 'facebook' , function( value ) {
		value.bind( function( to ) {
			$( '.customizer-facebook' ).attr('href',to);
		} );
	});

	wp.customize( 'twitter' , function( value ) {
		value.bind( function( to ) {
			$( '.customizer-twitter' ).attr('href',to);
		} );
	});

})( jQuery );
