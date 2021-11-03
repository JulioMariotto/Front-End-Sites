<?php

	/* QUEBRAS DE LINHA
		Windows -> \r\n
		Linux   -> \n
	*/

	$nome = $_GET['nome'];
	$email = $_GET['email'];
	$telefone = $_GET['telefone'];
	$mensagem_cliente = $_GET['mensagem'];


	$quebra_linha = "\n";	// \n para hospedagem Linux e /r/n para hospedagem Windows
		$email_sender = "contato@incorporadoracrco.com.br";

	$destinatario = "webmaster@upagencia.com";

	$nome_remetente = "Contato via Website";
	$assunto = "Contato via Website";
	$mensagem = "
		Um possivel cliente nos contatou pelo nosso website. Seguem os dados:<br/>".$quebra_linha.PHP_EOL."
		
		Nome do Cliente: ".$nome.$quebra_linha.PHP_EOL."<br/>"."
		Email: ".$email.$quebra_linha.PHP_EOL."<br/>"."
		Telefone: ".$telefone.$quebra_linha.PHP_EOL."<br/>"."
		Mensagem que o cliente enviou:".$quebra_linha.PHP_EOL.$quebra_linha.PHP_EOL.$mensagem_cliente.$quebra_linha.PHP_EOL;
	

	$cabecalho = "MIME-Version: 1.1".$quebra_linha;
    $cabecalho .= "Content-Transfer-Encoding: 8bit\n";
    $cabecalho .= "X-Priority: 1\n";
	$cabecalho .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
	$cabecalho .= "From: CRCO Site <".$email_sender.">".$quebra_linha;
	$cabecalho .= "Return-Path: ".$email_sender.$quebra_linha;
	// $cabecalho .= "Cc: ".$comcopia.$quebra_linha;
	// $cabecalho .= "Bcc: ".$comcopiaoculta.$quebra_linha;
	$cabecalho .= "Reply-to: ".$email_sender.$quebra_linha;      // Para não haver problemas com spam
	
	

	if (mail($destinatario, $assunto, $mensagem, $cabecalho ,"-r".$email_sender)) {

	} else ;

	
?>