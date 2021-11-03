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


	var goToTop = function() {

		$('.js-gotop').on('click', function(event){
			
			event.preventDefault();

			$('html, body').animate({
				scrollTop: $('html').offset().top
			}, 500);
			
			return false;
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


	


	// E-books

	var ebook1 = function() {

		$(".verifica").click(function() {
			var txt = $(this).prev().val();
			if(txt.length > 2 && txt.indexOf("@") >= 0 && txt.lastIndexOf(".") > txt.indexOf("@")){
				$(this).attr("href", "ebooks/10ReceitasComBaixaCaloria.pdf");
				$(this).attr("download", "");
				$(this).siblings(".alert-danger").hide();
				$(this).siblings(".alert-success").show();
			}
			else{
				$(this).siblings(".alert-success").hide();
				$(this).siblings(".alert-danger").show();
				$(this).removeAttr("href", "ebooks/ReceitasDeSaladas.pdf");
				$(this).removeAttr("download", "");
			}
		})

		/*$('#check_email_1').keyup(function(){
			var txt = $(this).val();
			console.log(txt.length, txt.indexOf("@"), txt);
			if(txt.length > 2 && txt.indexOf("@") >= 0){
				$(this).siblings('a').find('button').removeClass('btn-danger');
				$(this).siblings('a').find('button').addClass('btn-success');
				$(this).siblings('a').attr("href", "ebooks/10ReceitasComBaixaCaloria.pdf");
				$(this).siblings('a').attr("download", "");
				$('#alt-1').hide();
				$('#scs-1').show();
			}
			else
			{
				$('#scs-1').hide();
				$('#alt-1').show();
				$(this).siblings('a').find('button').addClass('btn-danger');
				$(this).siblings('a').find('button').removeClass('btn-success');
				$(this).siblings('a').removeAttr("href", "ebooks/ReceitasDeSaladas.pdf");
				$(this).siblings('a').removeAttr("download", "");
			}
		});*/
	}

	var ebook2 = function() {

		$('#check_email_2').keydown(function(){
			var txt = $(this).val();
			if(txt.length > 2 && txt.indexOf("@") >= 0){
				$(this).siblings('a').find('button').removeClass('btn-danger');
				$(this).siblings('a').find('button').addClass('btn-success');
				$(this).siblings('a').attr("href", "ebooks/13Dicas.pdf");
				$(this).siblings('a').attr("download", "");
				$('#alt-2').hide();
				$('#scs-2').show();
			}
			else
			{
				$('#scs-2').hide();
				$('#alt-2').show();
				$(this).siblings('a').find('button').addClass('btn-danger');
				$(this).siblings('a').find('button').removeClass('btn-success');
				$(this).siblings('a').removeAttr("href", "ebooks/ReceitasDeSaladas.pdf");
				$(this).siblings('a').removeAttr("download", "");
			}
		});
	}

	var ebook3 = function() {

		$('#check_email_3').keydown(function(){
			var txt = $(this).val();
			if(txt.length > 2 && txt.indexOf("@") >= 0 && lastIndexOf('.') > indexOf('@')){
				$(this).siblings('a').find('button').removeClass('btn-danger');
				$(this).siblings('a').find('button').addClass('btn-success');
				$(this).siblings('a').attr("href", "ebooks/MitosEVerdadesSobreAlimentação.pdf");
				$(this).siblings('a').attr("download", "");
				$('#alt-3').hide();
				$('#scs-3').show();
			}
			else
			{
				$('#scs-3').hide();
				$('#alt-3').show();
				$(this).siblings('a').find('button').addClass('btn-danger');
				$(this).siblings('a').find('button').removeClass('btn-success');
				$(this).siblings('a').removeAttr("href", "ebooks/ReceitasDeSaladas.pdf");
				$(this).siblings('a').removeAttr("download", "");
			}
		});
	}

	var ebook4 = function() {

		$('#check_email_4').keydown(function(){
			var txt = $(this).val();
			if(txt.length > 2 && txt.indexOf("@") >= 0){
				$(this).siblings('a').find('button').removeClass('btn-danger');
				$(this).siblings('a').find('button').addClass('btn-success');
				$(this).siblings('a').attr("href", "ebooks/ReceitasDeSaladas.pdf");
				$(this).siblings('a').attr("download", "");
				$('#alt-4').hide();
				$('#scs-4').show();
			}
			else
			{
				$('#scs-4').hide();
				$('#alt-4').show();
				$(this).siblings('a').find('button').addClass('btn-danger');
				$(this).siblings('a').find('button').removeClass('btn-success');
				$(this).siblings('a').removeAttr("href", "ebooks/ReceitasDeSaladas.pdf");
				$(this).siblings('a').removeAttr("download", "");
			}
		});
	}
	
	var ebook5 = function() {

		$('#check_email_5').keydown(function(){
			var txt = $(this).val();
			if(txt.length > 2 && txt.indexOf("@") >= 0){
				$(this).siblings('a').find('button').removeClass('btn-danger');
				$(this).siblings('a').find('button').addClass('btn-success');
				$(this).siblings('a').attr("href", "ebooks/ReceitasDeSucos.pdf");
				$(this).siblings('a').attr("download", "");
				$('#alt-5').hide();
				$('#scs-5').show();
			}
			else
			{
				$('#scs-5').hide();
				$('#alt-5').show();
				$(this).siblings('a').find('button').addClass('btn-danger');
				$(this).siblings('a').find('button').removeClass('btn-success');
				$(this).siblings('a').removeAttr("href", "ebooks/ReceitasDeSaladas.pdf");
				$(this).siblings('a').removeAttr("download", "");
			}
		});
	}


	// Animações

	var homeAnimate = function() {								
				
		$('#carousel').animate({
			opacity: 1,
			width: '100%'
		}, 500);
	};


	var painelAnimate = function() {
		if ( $('#painel').length > 0 ) {	

			$('#painel').waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {


					setTimeout(function() {
						$('#painel .to-animate').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('slideInLeft animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);

					
					$(this.element).addClass('animated');
						
				}
			} , { offset: '80%' } );

		}
	};


	var ebookAnimate = function() {
		var ebook = $('#ebooks');
		if ( ebook.length > 0 ) {	

			ebook.waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {


					setTimeout(function() {
						ebook.find('.to-animate').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeInRightBig animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);

					

					$(this.element).addClass('animated');
						
				}
			} , { offset: '80%' } );

		}
	};

	var infoAnimate = function() {
		var info = $('#dicas');
		if ( info.length > 0 ) {	

			info.waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {


					setTimeout(function() {
						info.find('.to-animate').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeInUp animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);

					

					$(this.element).addClass('animated');
						
				}
			} , { offset: '80%' } );

		}
	};


	var tableAnimate = function() {
		var contact = $('#tabela');
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
			} , { offset: '80%' } );

		}
	};

	var contactAnimate = function() {
		var contact = $('#contato');
		if ( contact.length > 0 ) {	

			contact.waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {

					setTimeout(function() {
						contact.find('.to-animate').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeInUp animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);

					$(this.element).addClass('animated');
						
				}
			} , { offset: '80%' } );

		}
	};

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
	
	



	$(function(){

		parallax();

		burgerMenu();

		clickMenu();

		navigationSection();

		goToTop();

		painel();
		ebook1();
		homeAnimate();
		painelAnimate();
		ebookAnimate();
		infoAnimate();
		tableAnimate();
		contactAnimate();
		

	});


}());

//formulario//

	function enviar(){
    
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var telefone = document.getElementById("telefone").value;
    var mensagem = document.getElementById("mensagem").value;

    var params = "nome="+nome;
    params += "&email="+email;
    params += "&telefone="+telefone;
    params += "&mensagem="+mensagem;

    if(window.XMLHttpRequest)
        xmlhttp = new XMLHttpRequest();
    else
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                           
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var result = xmlhttp.responseText;
            $('#resultado').removeClass("hide");
            document.getElementById("resultado").innerHTML = "Mensagem enviada com sucesso!";
            $('#resultado').removeClass("alert-danger");
            $('#resultado').addClass("alert-success");
        }
        else
        {
        	$('#resultado').removeClass("alert-success");
        	$('#resultado').addClass("alert-danger");
        	$('#resultado').removeClass("hide");
        	document.getElementById("resultado").innerHTML = "Erro ao enviar a mensagem!";
        }
    };
    xmlhttp.open("GET","enviar.php?"+params, true); 
    xmlhttp.send();

}

