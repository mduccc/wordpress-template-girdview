/**
 * Sticky Header
 *
 * Copyright 2017 ThemeZee
 * Free to use under the GPLv2 and later license.
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Author: Thomas Weichselbaumer (themezee.com)
 *
 * @package Gridbox
 */

(function($) {

	/**--------------------------------------------------------------
	# Sticky Header
	--------------------------------------------------------------*/
	$.fn.stickyHeader = function() {

		var body = $( 'body' ),
			top_position = $( this ).offset().top - body.offset().top - 1,
			header_height = $( this ).height() + top_position;

		var makeSticky = function() {

			var window_top = $( window ).scrollTop();

			if ( window_top > top_position ) {

				body.addClass( 'sticky-header' );
				body.css( 'padding-top', header_height + 'px' );

			} else {

				body.removeClass( 'sticky-header' );
				body.css( 'padding-top', '0' );

			}
		}

		makeSticky();

		$( window ).scroll( makeSticky );

	};

	/**--------------------------------------------------------------
	# Setup Sticky Header
	--------------------------------------------------------------*/
	$( document ).ready( function() {

		/* Add Sticky Header feature */
		$( '.site-header' ).stickyHeader();

	} );

}(jQuery));
