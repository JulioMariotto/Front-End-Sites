<?php


function listaClientesSemPromocao($conexao){

	require_once '../../../database/conecta.php';

	$id_clientes_promocoes = array();
	$condicao = "";

	$sql = mysqli_query($conexao, "SELECT ID_CLIENTE FROM PROMOCOES");
	while($registro = mysqli_fetch_array($sql)){
		$condicao .= "(ID != $registro[0]) AND ";
	}
	$condicao = substr($condicao, 0, (strlen($condicao) - 5));


	$sql = mysqli_query($conexao, "SELECT CLIENTE FROM CLIENTES WHERE ((FACEBOOK = 1) AND ($condicao))");
	while($registro = mysqli_fetch_array($sql)){
		array_push($id_clientes_promocoes, array("cliente" => $registro[0]));
	}

	return $id_clientes_promocoes;

}

?>