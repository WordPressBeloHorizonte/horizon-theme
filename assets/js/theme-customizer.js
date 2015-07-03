(function( $ ) {
	"use strict";
	//Images
	wp.customize( 'logo' , function( value ) {
		value.bind( function( to ) {
			if ( to.length > 0 )
				$( '.customizer-logo' ).attr('src', to).show();
			else
				$( '.customizer-logo' ).hide();
		} );
	});

	wp.customize( 'banner_icon' , function( value ) {
		value.bind( function( to ) {
			if ( to.length > 0 )
				$( '.customizer-banner-icon' ).attr('src', to).show();
			else
				$( '.customizer-banner-icon').hide();
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
