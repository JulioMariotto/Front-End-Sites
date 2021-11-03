<?php

	// Faz a conexão com o banco de dados
	error_reporting(0);
	header('Content-Type: text/html; charset=utf-8');
	date_default_timezone_set("America/Sao_Paulo");

	$conexao = mysqli_connect('191.252.144.30:3306', 'upagenci_client', 'seguro.17U', 'upagenci_dessbesel');

	
	if (! $conexao) {
		// Enviar email para o suporte
	}


	mysqli_query($conexao, "SET NAMES 'utf8'");
	mysqli_query($conexao, 'SET character_set_connection=utf8');
	mysqli_query($conexao, 'SET character_set_client=utf8');
	mysqli_query($conexao, 'SET character_set_results=utf8');


?>