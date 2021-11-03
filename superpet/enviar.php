<?php

	/* QUEBRAS DE LINHA
		Windows -> \r\n
		Linux   -> \n
	*/

	$nome = $_GET['nome'];
	$email = $_GET['email'];
	$telefone = $_GET['telefone'];
	$endereco = $_GET['endereco'];
	$mensagem_cliente = $_GET['mensagem'];
	$filial = $_GET['cidade'];


	$quebra_linha = "\n";	// \n para hospedagem Linux e /r/n para hospedagem Windows
		$email_sender = "vendas@malucelli.com";

	$destinatario = "vendas@malucelli.com";

	$nome_remetente = "Contato via Website";
	$assunto = "Contato via Website";
	$mensagem = "
		Um possivel cliente nos contatou pelo nosso website. Seguem os dados:<br/>".$quebra_linha.PHP_EOL."
		
		Nome do Cliente: ".$nome.$quebra_linha.PHP_EOL."<br/>"."
		Email: ".$email.$quebra_linha.PHP_EOL."<br/>"."
		Telefone: ".$telefone.$quebra_linha.PHP_EOL."<br/>"."
		Endereco: ".$cidade.$quebra_linha.PHP_EOL."<br/>"."
		Filial: ".$filial.$quebra_linha.PHP_EOL."<br/>"."
		Mensagem que o cliente enviou:".$quebra_linha.PHP_EOL.$quebra_linha.PHP_EOL.$mensagem_cliente.$quebra_linha.PHP_EOL;
	

	$cabecalho = "MIME-Version: 1.1".$quebra_linha;
    $cabecalho .= "Content-Transfer-Encoding: 8bit\n";
    $cabecalho .= "X-Priority: 1\n";
	$cabecalho .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
	$cabecalho .= "From: Malucelli <".$email_sender.">".$quebra_linha;
	$cabecalho .= "Return-Path: ".$email_sender.$quebra_linha;
	// $cabecalho .= "Cc: ".$comcopia.$quebra_linha;
	// $cabecalho .= "Bcc: ".$comcopiaoculta.$quebra_linha;
	$cabecalho .= "Reply-to: ".$email_sender.$quebra_linha;      // Para não haver problemas com spam
	
	

	if (mail($destinatario, $assunto, $mensagem, $cabecalho ,"-r".$email_sender)) {
		echo "<p>Sua mensagem foi enviada com sucesso!</p><p>Agradecemos seu contato.</p>";
	} else 
		echo ("<p>Desculpe-nos.</p> <p>Houve um erro ao enviar email. Tente novamente mais tarde.</p>");

	
?>