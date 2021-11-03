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

$(document).ready(function(){
	
	BRUSHED.filter();
	BRUSHED.headers();

	$('[data-option-value=".lj"]').click(function(){
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
		}
	});

	$('[data-option-value=".utl"]').click(function(){
		if($('.utilidade').length > 0){
		
			$(".utilidade").fancybox({				
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

	$('[data-option-value=".pnt"]').click(function(){
		if($('.pintura').length > 0){
		
			$(".pintura").fancybox({				
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

	$('[data-option-value=".dcr"]').click(function(){
		if($('.decoracao').length > 0){
		
			$(".decoracao").fancybox({				
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

	$('[data-option-value=".rfm"]').click(function(){
		if($('.reforma').length > 0){
		
			$(".reforma").fancybox({				
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

	$('[data-option-value=".elt"]').click(function(){
		if($('.eletrica').length > 0){
		
			$(".eletrica").fancybox({				
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

	$('[data-option-value=".hdr"]').click(function(){
		if($('.hidra').length > 0){
		
			$(".hidra").fancybox({				
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

	$('[data-option-value=".pis"]').click(function(){
		if($('.pisos').length > 0){
		
			$(".pisos").fancybox({				
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

	//$("#clicar").click();

});



});
