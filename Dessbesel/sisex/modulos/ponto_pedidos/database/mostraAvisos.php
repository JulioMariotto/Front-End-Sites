<?php

	require_once '../../../database/conecta.php';
	require_once 'listaClientesSemPromocao.php';
	require_once 'listaPromocoesAcabando.php';
	
	$clientes_sem_promocao = listaClientesSemPromocao($conexao);	
	$promocoes_acabando = listaPromocoesAcabando($conexao);
	$saida = array();

	//var_dump($clientes_sem_promocao);
	//var_dump($promocoes_acabando);

	array_push($saida, $clientes_sem_promocao);
	array_push($saida, $promocoes_acabando);

	echo json_encode($saida);

?>