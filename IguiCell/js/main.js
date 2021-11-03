"use strict";

var filter = function (){
    if($('#projects').length > 0){      
        var $container = $('#projects');
        
        $container.imagesLoaded(function() {
            $container.isotope({
              // options
              animationEngine: 'best-available',
              itemSelector : '.item-thumbs',
              layoutMode : 'fitRows'
            });
        });
    
        
        // filter items when filter link is clicked
        var $optionSets = $('#options .option-set'),
            $optionLinks = $optionSets.find('a');
    
          $optionLinks.click(function(){
            var $this = $(this);
            // don't proceed if already selected
            
            var $optionSet = $this.parents('.option-set');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');
      
            // make option object dynamically, i.e. { filter: '.my-filter-class' }
            var options = {},
                key = $optionSet.attr('data-option-key'),
                value = $this.attr('data-option-value');
            // parse 'false' as false boolean
            value = value === 'false' ? false : value;
            options[ key ] = value;
            if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
              // changes in layout modes need extra logic
              changeLayoutMode( $this, options )
            } else {
              // otherwise, apply new options
              $container.isotope( options );
            }
            
            return false;
        });

    }
}

var headers = function(){

    var list = $("a[href='#filter']");

    list.click(function(){
        $('.titulo-principal').removeClass('ativo');
        var id = $(this).attr('data-content');
        $('#'+id).addClass('ativo');
        $('#'+id).fadeIn();
    })
}


/* ==================================================
   FancyBox
================================================== */

var fancyBoxTodas = function(){
    if($('.fancybox').length > 0){
        
        $(".fancybox").fancybox({               
                padding : 0,
                beforeShow: function () {
                    this.title = $(this.element).attr('title');
                    this.title = '<h4>' + this.title + '</h4>' + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';
                },
                helpers : {
                    title : { type: 'inside' },
                }
            });
    }
}


jQuery(document).ready(function ($) {
	$(window).load(function () {
		$(".loaded").fadeOut();
		$(".preloader").delay(1000).fadeOut("slow");
        painel();
	});

    /* Fancybox filters */

    filter();
    fancyBoxTodas();
    headers();

    $('[data-option-value=".mdm"]').click(function(){
        if($('.modem').length > 0){
        
            $(".modem").fancybox({              
                padding : 0,
                beforeShow: function () {
                    this.title = $(this.element).attr('title');
                    this.title = '<h4>' + this.title + '</h4>' + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';
                },
                helpers : {
                    title : { type: 'inside' },
                }
            });
        }
    });

    $('[data-option-value=".mou"]').click(function(){
        if($('.mouse').length > 0){
        
            $(".mouse").fancybox({              
                padding : 0,
                beforeShow: function () {
                    this.title = $(this.element).attr('title');
                    this.title = '<h4>' + this.title + '</h4>' + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';
                },
                helpers : {
                    title : { type: 'inside' },
                }
            });
        }
    });

    $('[data-option-value=".tlc"]').click(function(){
        if($('.teclado').length > 0){
        
            $(".teclado").fancybox({                
                padding : 0,
                beforeShow: function () {
                    this.title = $(this.element).attr('title');
                    this.title = '<h4>' + this.title + '</h4>' + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';
                },
                helpers : {
                    title : { type: 'inside' },
                }
            });
        }
    });

    $('[data-option-value=".mnt"]').click(function(){
        if($('.monitor').length > 0){
        
            $(".monitor").fancybox({                
                padding : 0,
                beforeShow: function () {
                    this.title = $(this.element).attr('title');
                    this.title = '<h4>' + this.title + '</h4>' + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';
                },
                helpers : {
                    title : { type: 'inside' },
                }
            });
        }
    });

    $('[data-option-value=".hds"]').click(function(){
        if($('.headset').length > 0){
        
            $(".headset").fancybox({                
                padding : 0,
                beforeShow: function () {
                    this.title = $(this.element).attr('title');
                    this.title = '<h4>' + this.title + '</h4>' + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';
                },
                helpers : {
                    title : { type: 'inside' },
                }
            });
        }
    });

    $('[data-option-value=".vdo"]').click(function(){
        if($('.video').length > 0){
        
            $(".video").fancybox({              
                padding : 0,
                beforeShow: function () {
                    this.title = $(this.element).attr('title');
                    this.title = '<h4>' + this.title + '</h4>' + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';
                },
                helpers : {
                    title : { type: 'inside' },
                }
            });
        }
    });

    $('[data-option-value="*"]').click(function(){

        fancyBoxTodas();
        
    });

    if($('.loja').length > 0){
    
        $(".loja").fancybox({               
            padding : 0,
            beforeShow: function () {
                this.title = $(this.element).attr('title');
                this.title = '<h4>' + this.title + '</h4>' + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';
            },
            helpers : {
                title : { type: 'inside' },
            }
        });
    };


    /*---------------------------------------------*
     * Mobile menu
     ---------------------------------------------*/
    $('#navbar-collapse').find('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: (target.offset().top - 40)
                }, 1000);
                if ($('.navbar-toggle').css('display') != 'none') {
                    $(this).parents('.container').find(".navbar-toggle").trigger("click");
                }
                return false;
            }
        }
    });
	

	/*---------------------------------------------*
     * Menu Background Change
     ---------------------------------------------*/
	
	/*var windowWidth = $(window).width();
    if (windowWidth > 757) {

        
          
            $(window).scroll(function () {
                if ($(this).scrollTop() > 75) {
                    $('.navbar').fadeIn(200);
                    $('.navbar').addClass('menu-bg');

                } else {
                    
                    $('.navbar').removeClass('menu-bg');
                }
            });
        
    }*/
		$('#bs-example-navbar-collapse-1').localScroll();
		
	/*---------------------------------------------*
     * Scroll Up
     ---------------------------------------------*/	
		$(window).scroll(function(){
        if ($(this).scrollTop() > 600) {
            $('.scrollup').fadeIn('slow');
        } else {
            $('.scrollup').fadeOut('slow');
        }
		});
		
		$('.scrollup').click(function(){
			$("html, body").animate({ scrollTop: 0 },1000);
			return false;
		});
		
	


    /*---------------------------------------------*
     * STICKY scroll
     ---------------------------------------------*/

		$.localScroll();



    /*---------------------------------------------*
     * Counter 
     ---------------------------------------------*/

//    $('.statistic-counter').counterUp({
//        delay: 10,
//        time: 2000
//    });




    /*---------------------------------------------*
     * WOW
     ---------------------------------------------*/

//        var wow = new WOW({
//            mobile: false // trigger animations on mobile devices (default is true)
//        });
//        wow.init();


    /* ---------------------------------------------------------------------
     Carousel
     ---------------------------------------------------------------------= */

//    $('.testimonials').owlCarousel({
//        responsiveClass: true,
//        autoplay: false,
//        items: 1,
//        loop: true,
//        dots: true,
//        autoplayHoverPause: true
//
//    });


    //End
});

var painel = function(){

        $('.bgd').hover(

        function(){
            
            var all = $('.bgd');
            all.each(function(k){
                var a = $(this);
                if(!a.hasClass('larg'))
                {
                    a.css("width", "20%");
                }
            
            })
            $(this).addClass('larg');
            $(this).children('.txt').fadeIn();
            


        },
        function(){

            var all = $('.bgd');
            all.each(function(k){
                var a = $(this);
                if(a.hasClass('bgd'))
                {
                    a.css("width", "25%");
                }
            })
            $(this).removeClass('larg');
            $(this).children('.txt').fadeOut();
        }
        );
    };