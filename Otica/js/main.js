/* Java Script */

var mostruario = function(){

	$('.icon').click(function(){
		$('.tabs nav ul li').removeClass('tab-current');
		$(this).parent().addClass('tab-current');
		var id = $(this).attr('data-box');
		$('.content-wrap section').removeClass('content-current');
		$(id).fadeIn('slow');
		$(id).addClass('content-current');
	})
}

var btnVerMais = function(){

	$('.ver-mais').click(function(){
		var ocultos = $(this).parent().siblings('.ocl');
		
		ocultos.addClass('most');
		ocultos.fadeIn('slow');
		$(this).siblings('.ver-menos').toggle();
		$(this).toggle();
	})
}

var btnVerMenos = function(){

	$('.ver-menos').click(function(){
		var ocultos = $(this).parent().siblings('.most');

		ocultos.removeClass('most');
		ocultos.fadeOut('slow');
		$(this).siblings('.ver-mais').toggle();
		$(this).toggle();
	})
}

var slide = function(){

	

		$("#slider-01").animate({
	    	left: "-4892" 
	  	}, 99000, "linear", function(){
	  		$("#slider-01").css("left", "0");
	 		slide();
	  	});

}

var escondeCampo = function(str){

	$("#"+str).attr("disabled", " ");
	$("#"+str).removeAttr("required");
}

var mostraCampo = function(str){

	$("#"+str).removeAttr("disabled");
	$("#"+str).attr("required", " ");
	$("#"+str).focus();
}


$(function(){

	mostruario();
	btnVerMais();
	btnVerMenos();
	slide();

});