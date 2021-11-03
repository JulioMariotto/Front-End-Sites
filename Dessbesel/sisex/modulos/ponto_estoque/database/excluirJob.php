<?php

	require_once '../../../database/conecta.php';
	session_start();

	$id_job = $_POST['id'];


	$sql = mysqli_query($conexao, "DELETE FROM CHAT_JOBS WHERE ID_JOB = $id_job");
	$sql = mysqli_query($conexao, "DELETE FROM JOBS WHERE ID = $id_job");

	echo json_encode(true);

?>