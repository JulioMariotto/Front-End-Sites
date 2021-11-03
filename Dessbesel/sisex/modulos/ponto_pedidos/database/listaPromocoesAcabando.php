<?php

function listaPromocoesAcabando($conexao){

	// Lista as promocoes que acabarão dentro de 5 dias

	$id_clientes_promocoes = array();
	$condicao = "";

	$data_hoje = date("Y-m-d");
	$data_7_dias = date("Y-m-d", strtotime("+7 days")); 

	$sql = mysqli_query($conexao, "SELECT ID_CLIENTE, NOME, DATA_FIM FROM PROMOCOES WHERE DATA_FIM BETWEEN '$data_hoje' AND '$data_7_dias'");


	while($registro = mysqli_fetch_array($sql)){

		$sql2 = mysqli_query($conexao, "SELECT CLIENTE FROM CLIENTES WHERE ((FACEBOOK = 1) AND (ID = $registro[0]))");
		$registro2 = mysqli_fetch_array($sql2);
		
		array_push($id_clientes_promocoes, array("cliente" => $registro2[0], "promocao" => $registro[1], "data_fim" => $registro[2]));

	}

	return $id_clientes_promocoes;

}

?>