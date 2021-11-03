<?php


	require_once '../../../database/conecta.php';

	$id = $_POST["id"];
	$etapa = $_POST["etapa"];

	$sql = mysqli_query($conexao, "UPDATE JOBS SET ID_ETAPA=$etapa WHERE ID=$id");
	if($sql)
	{
		echo "ok";
	}
	else
	{
		echo "not ok";
	}

?>