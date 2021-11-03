<?php

	require_once '../../../database/conecta.php';

	$id_job = $_POST['id_job'];

	$sql = mysqli_query($conexao, "SELECT * FROM CHAT_JOBS WHERE ID_JOB = $id_job ORDER BY ID ASC");
	
	$lista = array();
	while ($registro = mysqli_fetch_array($sql)){

		$sql2 = mysqli_query($conexao, "SELECT NOME FROM USUARIOS WHERE ID = $registro[2]");
		$nome_remetente = mysqli_fetch_array($sql2);
		$nome_remetente = $nome_remetente[0];

		$data = substr($registro[3], 8)."/".substr($registro[3], 5, 2)."/".substr($registro[3], 0, 4);

		$mensagem = array(
			"data" => $data,
			"hora" => $registro[4],
			"mensagem" => $registro[5],
			"nome_remetente" => $nome_remetente
		);
		array_push($lista, $mensagem);

	}

	echo json_encode($lista);

?>