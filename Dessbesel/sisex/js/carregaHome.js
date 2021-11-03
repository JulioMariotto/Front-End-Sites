var permissoes = {
	
	mods  : [],

	inicializa : function(){

		var request = $.ajax({
		    url: "database/permissoes.php",
		    type: "POST",
		    data: "",
		    dataType: "json"
		});

		request.done(function(resposta) {

			if(resposta[0].permissao == 1)
			{
				$("body").append("<section class='telas' id='conteudo-vendas'><iframe src='modulos/ponto_vendas/'></iframe></section>");
				$("body").append("<section class='telas' id='conteudo-pedidos'><iframe src='modulos/ponto_pedidos/'></iframe></section>");
				$("body").append("<section class='telas' id='conteudo-estoque'><iframe src='modulos/ponto_estoque/'></iframe></section>");
				$("body").append("<section class='telas' id='conteudo-produtos'><iframe src='modulos/ponto_produtos/'></iframe></section>");
			}
			if(resposta[0].permissao == 2)
			{
				$("body").append("<section class='telas' id='conteudo-vendas'><iframe src='modulos/matriz_vendas/'></iframe></section>");
				$("body").append("<section class='telas' id='conteudo-pedidos'><iframe src='modulos/matriz_pedidos/'></iframe></section>");
				$("body").append("<section class='telas' id='conteudo-estoque'><iframe src='modulos/matriz_estoque/'></iframe></section>");
				$("body").append("<section class='telas' id='conteudo-produtos'><iframe src='modulos/matriz_produtos/'></iframe></section>");
			}
			
		});

		request.fail(function(jqXHR, textStatus) {
		    console.log("Request failed: " + textStatus);
		});


	}


};

var menu = {


	alternaPalco : function(idSecao, btMenu){
		
		// Estiliza botão no menu		
		$("#menu ul li a").attr("class", "");
		$(btMenu).attr("class", "menu_selecionado");

		// Alterna o palco
		this.setPalco(idSecao);
	},

	setPalco : function(idSecao){

		$("section").attr("class", "secao_invisivel");
		$("#"+idSecao).attr("class", "secao_visivel'");

	}

};

$(function(){

	permissoes.inicializa();

	$(".link").click(function(){
		var id = $(this).attr("data-select");
		
		$(".telas").hide();
		$(id).show();
		$(".link").removeClass("menu_selecionado");
		$(this).addClass("menu_selecionado");
	});

	$("#btn-menu-toggle").click(function(){
		$("nav").css({
			"-webkit-transform": "translate(0, 0)",
		    "-ms-transform": "translate(0, 0)",
		    "transform": "translate(0, 0)"
		});
		$(".control-nav-close").css({
			"-webkit-transform": "translate(0, 0)",
			"-ms-transform": "translate(0, 0)",
			"transform": "translate(0, 0)"
		});
	});

	$(".control-nav-close").click(function(){
		$("nav").css({
			"-webkit-transform": "translate(100%, 0)",
		    "-ms-transform": "translate(100%, 0)",
		    "transform": "translate(100%, 0)"
		});
		$(".control-nav-close").css({
			"-webkit-transform": "translate(100%, 0)",
			"-ms-transform": "translate(100%, 0)",
			"transform": "translate(100%, 0)"
		});
	})
})