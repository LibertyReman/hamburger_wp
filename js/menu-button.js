jQuery( function( $ ) {
	$( ".js-menu-button" ).on( "click", function() {
		$( "body" ).toggleClass( "is-open" );
		$( ".p-gmenu__layer" ).toggleClass( "is-open" );
		$( ".p-gmenu__content" ).toggleClass( "is-open" );
	} );
} );
