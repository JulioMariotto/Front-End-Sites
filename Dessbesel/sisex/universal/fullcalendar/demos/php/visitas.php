<?php

	$lista_visitas = array();

	// $visita->title = "Ótica Especialista";
	// $visita->start = "2017-08-22 09:30";

	// array_push($lista_visitas, $visita);

	// $visita->title = "Amany";
	// $visita->start = "2017-08-22 13:00";

	// array_push($lista_visitas, $visita);

	$visita = array(
				"title" => "Especialista",
				"start" => "2017-08-22 17:00",
				"objetivo" => "Pegar os óculos."
			);

	array_push($lista_visitas, $visita);

	$visita = array(
				"title" => "Amany",
				"start" => "2017-08-22 09:00",
				"objetivo" => "Falar das danças."
			);

	array_push($lista_visitas, $visita);


	echo json_encode($lista_visitas);	

?>