<?php

	require_once '../../../database/conecta.php';
	session_start();

	$id_remetente = $_SESSION['id'];
	$get = date("Y-m-d H:i");
	$data = substr($get, 0, 10);
	$horario = substr($get, 11);
	$mensagem = $_POST['mensagem'];
	$id_job = $_POST['id_job'];


	$sql = mysqli_query($conexao, "INSERT INTO CHAT_JOBS VALUES(NULL, $id_job, $id_remetente, '$data', '$horario', '$mensagem', '')");
	
	if($sql){
		echo json_encode(true);
	}
	else{
		echo json_encode(false);
	}

?>