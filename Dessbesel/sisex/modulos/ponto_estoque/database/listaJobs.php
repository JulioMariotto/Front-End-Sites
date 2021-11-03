<?php

	require_once '../../../database/conecta.php';



	$sql = mysqli_query($conexao, "SELECT * FROM JOBS WHERE ID_ETAPA != 6"); // ID_ETAPA = 6 significa que está concluído


	$lista = array();
	while($registro = mysqli_fetch_array($sql)){

		if($registro[5] == 1){
			$cor = "verde";
		}
		else if($registro[5] == 2){
			$cor = "amarelo";
		}
		else{
			$cor = "vermelho";
		}

		$sql2 = mysqli_query($conexao, "SELECT CLIENTE FROM CLIENTES WHERE ID = $registro[1]");
		$nome_cliente = mysqli_fetch_array($sql2);
		$nome_cliente = $nome_cliente[0];


		$job = array(
			"id" => $registro[0],
			"id_cliente" => $registro[1],
			"job" => $registro[2],
			"descricao" => $registro[3],
			"id_etapa" => $registro[4],
			"nome_cliente" => $nome_cliente,
			"status" => $cor
		);
		array_push($lista, $job);
	}

	echo json_encode($lista);

?>