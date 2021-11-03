<?php

	require_once '../../../database/conecta.php';

	$promocoes = array();
	$id = $_POST["id"];
	$sql = mysqli_query($conexao, "SELECT * FROM PROMOCOES WHERE ID = $id");

		$registro = mysqli_fetch_assoc($sql);
		$id_cliente = $registro['ID_CLIENTE'];
		$nome_cliente = mysqli_query($conexao, "SELECT CLIENTE FROM CLIENTES WHERE ID = $id_cliente");
		$nome_cliente = mysqli_fetch_assoc($nome_cliente);
		$nome_cliente = $nome_cliente["CLIENTE"];


		$data_inicio = $registro['DATA_INICIO'];
		$data_final = $registro['DATA_FIM'];
		$ano = substr($data_inicio, 0, 4);
		$mes = substr($data_inicio, 5, 2);
		$dia = substr($data_inicio, 8, 2);
		$data_inicio = $dia.".".$mes.".".$ano;
		$ano = substr($data_final, 0, 4);
		$mes = substr($data_final, 5, 2);
		$dia = substr($data_final, 8, 2);
		$data_final = $dia.".".$mes.".".$ano;


		$item = array(
			"id" => $registro['ID'],
			"cliente" => $nome_cliente,
			"nome" => $registro['NOME'],
			"descricao" => $registro['DESCRICAO'],
			"requisitos" => $registro['REQUISITOS_PARTICIPACAO'],
			"data_inicio" => $data_inicio,
			"data_fim" => $data_final,
			"observacao" => $registro['OBSERVACOES']
		);
		array_push($promocoes, $item);

	echo json_encode($promocoes);

?>