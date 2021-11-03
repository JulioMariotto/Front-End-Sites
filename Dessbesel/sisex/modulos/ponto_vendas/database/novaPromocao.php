<?php

	require_once '../../../database/conecta.php';

	$nome_cliente = $_POST['nome_cliente'];
	
	$sql = mysqli_query($conexao, "SELECT ID FROM CLIENTES WHERE CLIENTE = '$nome_cliente'");

	while($id = mysqli_fetch_assoc($sql)){
		$id_cliente = $id["ID"];
	}

	$nome = $_POST['nome_promocao'];
	$descricao = $_POST['descricao_promocao'];
	$requisitos = $_POST['requisitos_participar'];
	$data_inicio = $_POST['data-inicio'];
	$data_inicio = substr($data_inicio, 6, 4)."-".substr($data_inicio, 3, 2)."-".substr($data_inicio, 0, 2);
	$data_fim = $_POST['data-fim'];
	$data_fim = substr($data_fim, 6, 4)."-".substr($data_fim, 3, 2)."-".substr($data_fim, 0, 2);
	$observacao = $_POST['observacao'];
	
	$sql = mysqli_query($conexao, "INSERT INTO PROMOCOES VALUES(NULL, $id_cliente, '$nome', '$descricao', '$requisitos', '$data_inicio', '$data_fim', '$observacao')");

?>