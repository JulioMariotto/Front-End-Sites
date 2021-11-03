<?php

	require_once '../../../database/conecta.php';
	
	$diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');

	$diasemana_numero = date('w', time());
	
	if($diasemana_numero == 0)
	{
		$data = date('Y-m-d');
		$data_inicio_semana = date('Y-m-d', strtotime($data. '- 6 days'));
		$data_fim_semana = $data;
	}
	elseif($diasemana_numero == 1)
	{
		$data = date('Y-m-d');
		$data_inicio_semana = $data;
		$data_fim_semana = date('Y-m-d', strtotime($data. '+ 6 days'));
	}
	elseif($diasemana_numero == 2)
	{
		$data_inicio_semana = date('Y-m-d', strtotime($data. '- 1 days'));
		$data_fim_semana = date('Y-m-d', strtotime($data. '+ 5 days'));
	}
	elseif($diasemana_numero == 3)
	{
		$data_inicio_semana = date('Y-m-d', strtotime($data. '- 2 days'));
		$data_fim_semana = date('Y-m-d', strtotime($data. '+ 4 days'));
	}
	elseif($diasemana_numero == 4)
	{
		$data_inicio_semana = date('Y-m-d', strtotime($data. '- 3 days'));
		$data_fim_semana = date('Y-m-d', strtotime($data. '+ 3 days'));
	}
	elseif($diasemana_numero == 5)
	{
		$data_inicio_semana = date('Y-m-d', strtotime($data. '- 4 days'));
		$data_fim_semana = date('Y-m-d', strtotime($data. '+ 2 days'));
	}
	elseif($diasemana_numero == 6)
	{
		$data_inicio_semana = date('Y-m-d', strtotime($data. '- 5 days'));
		$data_fim_semana = date('Y-m-d', strtotime($data. '+ 1 days'));
	}


	echo "Inicio da semana = " . $data_inicio_semana . " - Final da semana =  " . $data_fim_semana . " - Dia de hoje = " . $diasemana[$diasemana_numero] . " - " . $diasemana_numero; 

?>