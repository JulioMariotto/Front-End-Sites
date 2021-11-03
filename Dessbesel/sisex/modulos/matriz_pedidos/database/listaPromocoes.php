<?php

	require_once '../../../database/conecta.php';

	$promocoes = array();
	$sql = mysqli_query($conexao, "SELECT * FROM PROMOCOES");

	while($registro = mysqli_fetch_array($sql)){


		$nome_cliente = mysqli_query($conexao, "SELECT CLIENTE FROM CLIENTES WHERE ID = $registro[1]");
		$nome_cliente = mysqli_fetch_array($nome_cliente);
		$nome_cliente = $nome_cliente[0];


		$data_inicio = $registro[5];
		$data_final = $registro[6];

		$data_inicio = substr($data_inicio, 2, 2)."/".substr($data_inicio, 5, 2)."/".substr($data_inicio, 8, 2);
		$data_final = substr($data_final, 2, 2)."/".substr($data_final, 5, 2)."/".substr($data_final, 8, 2);


		$item = array(
			"id" => $registro[0],
			"cliente" => $nome_cliente,
			"nome" => $registro[2],
			"descricao" => $registro[3],
			"requisitos" => $registro[4],
			"data_inicio" => $data_inicio,
			"observacoes" => $data_final
		);
		array_push($promocoes, $item);
	}

	echo json_encode($promocoes);


?>