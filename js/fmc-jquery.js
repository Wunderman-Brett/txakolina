(function ($) {

	/**
	* Load
	*/
	var $window = $(window);


	$window.load( function () {
		$( 'body' ).fadeIn().addClass( 'loaded' );
	} );

	$( document ).ready( function () {

		// Admin bar?
		var adminHeight = $('#wpadminbar').height() || 0;
		var heroHeight = $('#home-hero').height();
		// var headerHeight = $('#site-header').height() || 0;
		var scrollPosition;

		$('.site-navigation').css('top', adminHeight);

		if (heroHeight < $window.height()) {
			scrollPosition = heroHeight;
		} else {
			scrollPosition = $window.height();
		}
		$('.site-description').css('top', scrollPosition / 2);

		// $('#txakolina-search').css('top', headerHeight);

		$('#home-hero').css('top', adminHeight);

		// allow space for the slider on the Front Page
		$('.home #page').css('margin-top', scrollPosition);

		$('.site-header').affix({
			offset: {
				top: scrollPosition
			}
		});

		// Initialize Match Height.
		$( '.post' ).matchHeight();
		$('div.metric').matchHeight();

		// Initialize Fitvids.
		$( '#content' ).fitVids();

		// Initialize nanoScroller.
		$( '.nano' ).nanoScroller();

		/**
		* Add dropdown toggle that display child menu items.
		*/
		$( '#site-navigation .menu-item-has-children > a' ).after( '<button class="site-navigation-dropdown" aria-expanded="false"></button>' );
		/**
		* Toggle buttons and submenu items with active children menu items.
		*/
		$( '#site-navigation .current-menu-ancestor > button' ).addClass( 'toggle-on' );
		$( '#site-navigation .current-menu-ancestor > .sub-menu' ).addClass( 'toggled-on' );
		$( '.site-navigation-dropdown' ).click( function( e ) {
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
		$( '.site-navigation-close' ).on( 'click' ,function() {
			$( '#site-navigation' ).removeClass( 'site-navigation-open' );
			$( '#overlay' ).removeClass( 'overlay-open' );
		} );

		// Open menu.
		$( '#txakolina-menu' ).on( 'click', function() {
			$( '#overlay' ).addClass( 'overlay-open' );
			$( '#site-navigation' ).addClass( 'site-navigation-open' );
			return false;
		} );

		// Open search.
		$( '#txakolina-search-button' ).on( 'click', function() {
			if ($window.width() > 992) {
				if ($('.navbar-menu-container').hasClass('present')) {
					$('.navbar-menu-container').removeClass('present').fadeOut(0, function() {
						$('.txakolina-search').fadeIn('slow');
						$('.txakolina-search-button').find('i.fa-search').removeClass('fa-search').addClass('fa-close');
					});
				} else {
					$('.txakolina-search').fadeOut(0, function() {
						$('.navbar-menu-container').fadeIn(1000).addClass('present');
						$('.txakolina-search-button').find('i.fa-close').removeClass('fa-close').addClass('fa-search');
					});
				}
			} else {
				$('.txakolina-search').fadeToggle('fast');
			}
			return false;
		} );

		// Close search & menu on overlay click.
		$( '#overlay' ).on( 'click', function() {
			$( '#site-navigation' ).removeClass( 'site-navigation-open' );
			// $( '#txakolina-search' ).removeClass( 'search-open' );
			$( '#overlay' ).removeClass( 'overlay-open' );
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
