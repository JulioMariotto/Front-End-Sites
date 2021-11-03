;(function () {
	
	'use strict';



	// Parallax
	var parallax = function() {
		$(window).stellar();
	};


	// Burger Menu
	var burgerMenu = function() {

		$('body').on('click', '.js-nav-toggle', function(event){

			event.preventDefault();

			if ( $('#navbar').is(':visible') ) {
				$(this).removeClass('active');
			} else {
				$(this).addClass('active');	
			}

			
			
		});

	};


	// Nav
	var clickMenu = function() {

		$('#navbar a:not([class="external"])').click(function(event){
			var section = $(this).data('nav-section'),
				navbar = $('#navbar');

				if ( $('[data-section="' + section + '"]').length ) {
			    	$('html, body').animate({
			        	scrollTop: $('[data-section="' + section + '"]').offset().top
			    	}, 500);
			   }

		    if ( navbar.is(':visible')) {
		    	navbar.removeClass('in');
		    	navbar.attr('aria-expanded', 'false');
		    	$('.js-nav-toggle').removeClass('active');
		    }

		    event.preventDefault();
		    return false;
		});


	};

	// Scroll
	var navActive = function(section) {

		var $el = $('#navbar > ul');
		$el.find('li').removeClass('active');
		$el.each(function(){
			$(this).find('a[data-nav-section="'+section+'"]').closest('li').addClass('active');
		});

	};

	var navigationSection = function() {

		var $section = $('section[data-section]');
		
		$section.waypoint(function(direction) {
		  	
		  	if (direction === 'down') {
		    	navActive($(this.element).data('section'));
		  	}
		}, {
	  		offset: '100px'
		});

		$section.waypoint(function(direction) {
		  	if (direction === 'up') {
		    	navActive($(this.element).data('section'));
		  	}
		}, {
		  	offset: function() { return -$(this.element).height() + 5; }
		});

	};


	// Animações

	var section1 = function() {
		var apresenta = $('#apresenta');
		if ( apresenta.length > 0 ) {	

			apresenta.waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {


					setTimeout(function() {
						apresenta.find('.to-animate').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('slideInLeft animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);

					

					$(this.element).addClass('animated');
						
				}
			} , { offset: '50%' } );

		}
	};


	var section2 = function() {
		var ambiente = $('#ambiente');
		if ( ambiente.length > 0 ) {	

			ambiente.waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {


					setTimeout(function() {
						ambiente.find('.to-animate').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('slideInLeft animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);

					

					$(this.element).addClass('animated');
						
				}
			} , { offset: '50%' } );

		}
	};

	var section3 = function() {
		var marmita = $('#marmita');
		if ( marmita.length > 0 ) {	

			marmita.waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {


					setTimeout(function() {
						marmita.find('.to-animate').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeInUp animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);

					

					$(this.element).addClass('animated');
						
				}
			} , { offset: '50%' } );

		}
	};


	var section4 = function() {
		var contact = $('#contato');
		if ( contact.length > 0 ) {	

			contact.waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {

					setTimeout(function() {
						contact.find('.to-animate').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeInRightBig animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);

					$(this.element).addClass('animated');
						
				}
			} , { offset: '50%' } );

		}
	};

	
	
	



	$(function(){

		parallax();
		burgerMenu();
		clickMenu();
		navigationSection();
		section1();
		section2();
		section3();
		section4();

	});


}());

