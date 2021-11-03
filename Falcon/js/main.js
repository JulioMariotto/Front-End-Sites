/* Java Script */


var dropMenu = function(){

	$(".navbar-nav li a").click(function(){
		var value = $(this).attr("data-toggle");
		$(this).next().toggle();
		$(".drop-menu").not(value).hide();
	})
}

var hideMenu = function(){
	$(".content").click(function(){
		$('.drop-menu').hide();
	});
	$("#sobre-menu").click(function(){
		$('.drop-menu').hide();
	});
	$("#myCarousel").click(function(){
		$('.drop-menu').hide();
	});
	$(".transporte").click(function(){
		$('.drop-menu').hide();
	});
	$(".armazena").click(function(){
		$('.drop-menu').hide();
	});	
}


$(function(){

	dropMenu();
	hideMenu();


});