<?php

	require_once 'conecta.php';

	// Verifica permissão de um usuário em SESSION
	// e devolve um array de objetos JSON
	
	session_start();
	$id_usuario = $_SESSION['id'];

	$permissoes = array();

	$sql = mysqli_query($conexao, "SELECT PERMISSAO FROM PERMISSOES WHERE ID_USUARIO = $id_usuario");

	while($registro = mysqli_fetch_array($sql)){
	
		$permissao = array(
			"permissao" => $registro[0],
			"usuario" => $id_usuario
		);
		array_push($permissoes, $permissao);
	
	}
	
	echo json_encode($permissoes);

?>