jQuery(function($){

var BRUSHED = window.BRUSHED || {};


BRUSHED.filter = function (){
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

BRUSHED.headers = function(){

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

BRUSHED.fancyBoxTodas = function(){
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



$(document).ready(function(){
	
	
	
	BRUSHED.filter();
	BRUSHED.fancyBoxTodas();
	BRUSHED.headers();

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

		BRUSHED.fancyBoxTodas();
		
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

	$(".item-toggle").click(function(){
		
		var id = $(this).attr("data-toggle");
		$(".selection:visible").fadeOut("slow", function(){
			$(id).fadeIn("slow");
		});
		$(".ativo").removeClass("ativo");
		$(this).addClass("ativo");
	});

	$(".btn-dropdown").click(function(){
		$(".toggle-class").toggle();
	});

	$(".btn-close").click(function(){
		$(".toggle-class").toggle();
	});

	/*$(".input input--kuro:first").on("change", function(){
		var text = $(this).val();
		$(this).next().children().html(text);
	});*/
});



});
