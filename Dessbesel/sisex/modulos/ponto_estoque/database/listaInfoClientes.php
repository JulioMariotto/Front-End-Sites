<?php

	require_once 'conecta.php';
	
	$q = $_GET["q"];

	$sql = mysqli_query($conexao, "SELECT ID, CLIENTE FROM CLIENTES WHERE CLIENTE LIKE '%$q%'");

	$cliente = "";

	while($registro = mysqli_fetch_array($sql)){
		$cliente .= '<option value="'. $registro[1] .'" data-id="' . $registro[0] . '"></option>';
	}

	echo $cliente;


?>