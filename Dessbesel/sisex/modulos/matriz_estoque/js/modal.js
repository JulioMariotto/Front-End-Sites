function fadeInAdicionarPromocao(){
	document.getElementById("adicionar_promocao").style.display = "block";
	document.getElementById("fade").style.display = "block";
}
function fadeOutAdicionarPromocao(){
	document.getElementById("adicionar_promocao").style.display = "none";
	document.getElementById("fade").style.display = "none";
}



function fadeInAvisos(){
	document.getElementById("avisos").style.display = "block";
	document.getElementById("fade").style.display = "block";
}
function fadeOutAvisos(){
	document.getElementById("avisos").style.display = "none";
	document.getElementById("fade").style.display = "none";
}



function fadeInPromocao(){
	document.getElementById("mostrar_promocao").style.display = "block";
	document.getElementById("fade").style.display = "block";
}
function fadeOutPromocao(){
	document.getElementById("mostrar_promocao").style.display = "none";
	document.getElementById("fade").style.display = "none";
	document.getElementById("botao_salva").style.display = "none";
	document.getElementById("botao_edita").style.display = "block";
	document.getElementById("botao_exclui").style.display = "block";
	$("#cliente_promo_modal").val(" ");
    $("#nome_promo_modal").val(" ");
    $("#descricao_promo_modal").html(" ");
    $("#requisitos_promo_modal").html(" ");
    $("#descricao_promo_modal").val(" ");
    $("#requisitos_promo_modal").val(" ");
    $("#data-inicio_promo_modal").val(" ");
    $("#data-fim_promo_modal").val(" ");
    $("#observacao_promo_modal").html(" ");
    $("#observacao_promo_modal").val(" ");
}