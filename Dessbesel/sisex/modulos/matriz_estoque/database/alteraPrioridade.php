<?php


	require_once '../../../database/conecta.php';

	$id = $_POST["id"];
	$prioridade = $_POST["prioridade"];

	$sql = mysqli_query($conexao, "UPDATE JOBS SET ID_URGENCIA=$prioridade WHERE ID=$id");
	if($sql)
	{
		echo "ok";
	}
	else
	{
		echo "not ok";
	}

?>