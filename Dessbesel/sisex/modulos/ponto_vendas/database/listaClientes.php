<?php

	require_once '../../../database/conecta.php';
	
	$id_clientes = array();
	$sql = mysqli_query($conexao, "SELECT ID, CLIENTE FROM CLIENTES WHERE FACEBOOK = 1");	
	while($registro = mysqli_fetch_array($sql)){
		array_push($id_clientes, array(
			"id" => $registro[0],
			"cliente" => $registro[1]
		));
	}
	echo json_encode_array($id_clientes); 

?>