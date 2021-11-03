<?php

	require_once '../../../database/conecta.php';
	session_start();

	$id_promocao = $_POST['id'];


	$sql = mysqli_query($conexao, "DELETE FROM PROMOCOES WHERE ID = $id_promocao");

	echo json_encode(true);

?>