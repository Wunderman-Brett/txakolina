/**
 * Theme functions file.
 *
 * @package txakolina
 */

(function ($) {

	/**
	* Load
	*/
	var $window = $(window);


	$window.load( function () {
		$( 'body' ).fadeIn().addClass( 'loaded' );
	} );

	$( document ).ready( function () {

		// Initialize Header Slick slider.
		$( '.header-slider' ).slick( {
			speed: 600,
			fade: true,
			autoplay: true,
			autoplaySpeed: 4000,
			arrows: false
		} );

		// Admin bar?
		var adminHeight = $('#wpadminbar').height() || 0;
		var heroHeight = $('.header-slider').height();
		var headerHeight = $('#site-header').height() || 0;
		var scrollPosition;

		console.log(heroHeight);

		$('.main-navigation').css('top', adminHeight);

		if (heroHeight < $window.height()) {
			scrollPosition = heroHeight;
		} else {
			scrollPosition = $window.height();
		}
		$('.site-description').css('top', scrollPosition / 2);

		$('#txakolina-search-window').css('top', headerHeight);

		$('#home-slider').css('top', adminHeight);

		// allow space for the slider on the Front Page
		$('.home #page').css('margin-top', scrollPosition);


		$('.site-header').affix({
			offset: {
				top: scrollPosition
			}
		});

		// Initialize Match Height.
		$( '.post' ).matchHeight();

		// Initialize Fitvids.
		$( '#content' ).fitVids();

		// Initialize nanoScroller.
		$( '.nano' ).nanoScroller();

		/**
		* Add dropdown toggle that display child menu items.
		*/
		$( '.main-navigation .menu-item-has-children > a' ).after( '<button class="dropdown-toggle" aria-expanded="false"></button>' );
		/**
		* Toggle buttons and submenu items with active children menu items.
		*/
		$( '.main-navigation .current-menu-ancestor > button' ).addClass( 'toggle-on' );
		$( '.main-navigation .current-menu-ancestor > .sub-menu' ).addClass( 'toggled-on' );
		$( '.dropdown-toggle' ).click( function( e ) {
			var $this = $( this );
			e.preventDefault();
			$this.toggleClass( 'toggle-on' );
			$this.next( '.sub-menu' ).slideToggle();
			$this.attr( 'aria-expanded', $this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
		} );

		// Swipebox on galleries.
		$( '.gallery-icon a' ).each( function() {
			$( this ).attr( 'href', $( this ).find( 'img' ).attr( 'src' ).replace( '-800x600', '' ) );
			$( this ).attr( 'title', $( this ).parent( '.gallery-icon' ).next( 'figcaption' ).text() );
		} );
		// $( '.gallery-icon a' ).swipebox();

		/**
		* Search & menu
		*/
		// Close menu.
		$( '.close-menu' ).on( 'click' ,function() {
			$( '#site-navigation' ).removeClass( 'menu-open' );
			$( '#overlay' ).removeClass( 'overlay-open' );
		} );
		// Close search.
		$( '.close-search i' ).on( 'click', function() {
			$( '#txakolina-search-window' ).removeClass( 'search-open' );
			$( '#overlay' ).removeClass( 'overlay-open' );
		} );
		// Close search & menu on overlay click.
		$( '#overlay' ).on( 'click', function() {
			$( '#site-navigation' ).removeClass( 'menu-open' );
			$( '#txakolina-search-window' ).removeClass( 'search-open' );
			$( '#overlay' ).removeClass( 'overlay-open' );
		} );
		// Open menu.
		$( '#txakolina-menu' ).on( 'click', function() {
			$( '#overlay' ).addClass( 'overlay-open' );
			$( '#site-navigation' ).addClass( 'menu-open' );
			return false;
		} );
		// Open search.
		$( '#txakolina-search' ).on( 'click', function() {
			// $('#txakolina-search-window').slideToggle();
			// $( '#overlay' ).addClass( 'overlay-open' );
			$( '#txakolina-search-window' ).toggleClass( 'search-closed' );
			// $( '.txakolina-search input.search-field' ).focus();
			return false;
		} );

		/**
		* Social share
		*/
		$( '.post-social-wrapper' ).hover( function() { $( this ).find( $( '.post-social' ) ).fadeIn(); }, function() { $( this ).find( $( '.post-social' ) ).fadeOut(); } );
		if ( $( 'a.facebook-share' ).length > 0 || $( 'a.twitter-share' ).length > 0 || $( 'a.googleplus-share' ).length > 0) {
			$( '.facebook-share' ).click( txakolina_facebookShare );
			$( '.twitter-share' ).click( txakolina_twitterShare );
			$( '.googleplus-share' ).click( txakolina_googlePlusShare );
		}

	} );

	function txakolina_facebookShare() {
		window.open( 'https://www.facebook.com/sharer/sharer.php?u=' + $( this ).attr( 'href' ), "facebookWindow", "height=380,width=660,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0" );
		return false;
	}
	function txakolina_googlePlusShare() {
		window.open( 'https://plus.google.com/share?url=' + $( this ).attr( 'href' ), "googleplusWindow", "height=380,width=660,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0" );
		return false;
	}
	function txakolina_twitterShare() {
		var $page_title = encodeURIComponent( $( this ).attr( 'data-title' ) );
		window.open( 'http://twitter.com/intent/tweet?text=' + $page_title + ' ' + $( this ).attr( 'href' ), "twitterWindow", "height=370,width=600,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0" );
		return false;
	}

} )( jQuery );
