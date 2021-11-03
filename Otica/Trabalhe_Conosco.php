<?php 

require 'lib/sanitize.php';

$error = 0;
$msg = '';
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	isset($_POST["nome"]) == true ? $nome = sanitize($_POST["nome"]) : $nome = " ";
	isset($_POST["email"]) == true ? $email = sanitize($_POST["email"]) : $email = " ";
	isset($_POST["telefone"]) == true ? $telefone = sanitize($_POST["telefone"]) : $telefone = " ";
	isset($_POST["endereco"]) == true ? $endereco = sanitize($_POST["endereco"]) : $endereco = " ";
	isset($_POST["idade"]) == true ? $idade = sanitize($_POST["idade"]) : $idade = " ";
	isset($_POST["filho"]) == true ? $filho = sanitize($_POST["filho"]) : $filho = " ";
	isset($_POST["qtd_filhos"]) == true ? $qtd_filhos = sanitize($_POST["qtd_filhos"]) : $qtd_filhos = " ";
	$filho == 'sim' ? $filho = "e possuo " . $qtd_filhos . " filho(s)." : $filho = "e não possuo filhos.";
	isset($_POST["exp_area"]) == true ? $exp_area = sanitize($_POST["exp_area"]) : $exp_area = " ";
	isset($_POST["exp_area_texto"]) == true ? $exp_area_texto = sanitize($_POST["exp_area_texto"]) : $exp_area_texto = " ";
	$exp_area == 'sim' ? $exp_area = "Minha(s) experiência(s) na área é(são): " . $exp_area_texto : $exp_area = "Não tenho experiência na área";
	isset($_POST["treinamento"]) == true ? $treinamento = sanitize($_POST["treinamento"]) : $treinamento = " ";
	isset($_POST["pref_loja"]) == true ? $pref_loja = sanitize($_POST["pref_loja"]) : $pref_loja = " ";
	isset($_POST["interesse_trabalho"]) == true ? $interesse_trabalho = sanitize($_POST["interesse_trabalho"]) : $interesse_trabalho = " ";
	isset($_POST["razao_escolha"]) == true ? $razao_escolha = sanitize($_POST["razao_escolha"]) : $razao_escolha = " ";

	$cargos = "";
	$c = count($_POST['cargos']);
	if($c > 0)
	{
		for($x = 0; $x < $c; $x++)
		{
			$todos = $_POST['cargos'];
			$todos = $todos[$x];
			$cargos = $cargos . ", " . $todos;
		}
	}
	else
	{
		$cargos = "Não selecionou nenhum cargo";
	}

	$target_dir = "curriculos/" . $email . basename($_FILES["curriculo"]["name"]);
	$target_file = $target_dir;
	$pdfFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	if (file_exists($target_file)) {
	    $msg = "Houve um problema com o nome seu arquivo, renomeie e tente novamente!";
	    $error = 1;
	}
	
	if ($_FILES["curriculo"]["size"] > 4e+7) {
	    $msg = "Seu arquivo está muito pesado, tamanho maximo é 5MB!";
	    $error = 1;
	}
	
	if($pdfFileType != "pdf" && $pdfFileType != "PDF" && $pdfFileType != "docx"
	&& $pdfFileType != "DOCX" ) {
	    $msg = "Este tipo de arquivo não é suportado, apenas arquivos .pdf e .docx!";
	    $error = 1;
	}
	
	if ($error == 0) {
	    if (move_uploaded_file($_FILES["curriculo"]["tmp_name"], $target_file)) {

	        $error = 2;
	        
			$quebra_linha = "\n";
			$email_sender = "contato@oticasespecialista.com.br";
			$destinatario = "contato@oticasespecialista.com.br";//"contatoespecialista@hotmail.com.br";
			$assunto = "Candidato a vaga de emprego";
			$cabecalho = "MIME-Version: 1.1".$quebra_linha;
		    $cabecalho .= "Content-Transfer-Encoding: 8bit\n";
		    $cabecalho .= "X-Priority: 1\n";
			$cabecalho .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
			$cabecalho .= "From: Site Óticas Especialista <".$email_sender.">".$quebra_linha;
			$cabecalho .= "Return-Path: ".$email_sender.$quebra_linha;
			// $cabecalho .= "Cc: ".$comcopia.$quebra_linha;
			// $cabecalho .= "Bcc: ".$comcopiaoculta.$quebra_linha;
			$cabecalho .= "Reply-to: ".$email_sender.$quebra_linha;      // Para não haver problemas com spam
			
			$mensagem = "Meu nome é ".$nome . "\r\n". "Pode me contatar no telefone: " . $telefone . " ou no meu email: " .$email . "\r\n" . "Eu moro no endereço: " . $endereco . ".\r\n" . "Tenho " . $idade ." anos, " . $filho . "\r\n" . "Pretendo me candidatar ao(s) cargo(s) de" . $cargos . ".\r\n" . $exp_area . ".\r\n" . "Se tenho interesse em participar de treinamentos para adquirir e agregar conhecimento? " . $treinamento . ".\r\n" . "Gostaria de trabalhar em: " . $pref_loja . ".\r\n" . "Já trabalhei como: " . $interesse_trabalho . "\r\n" . "Motivo para contratar-me: " . $razao_escolha . "\r\nVocê pode visualizar meu currículo neste link https://oticasespecialista.com.br/". $target_file . " \r\n\r\n\r\n";
			
			if (mail($destinatario, $assunto, $mensagem, $cabecalho ,"-r".$email_sender))
			{
	        	$msg = "Seu currículo foi salvo com sucesso!";
			}
			else
			{
				$msg = "Houve um problema ao tentar contato com o banco de registros, porem as informações estão salvas, favor envie um email para <strong>contatoespecialista@hotmail.com.br</strong> e informe o envio do currículo";
				$filetxt = fopen("curriculos/FalhaEnvio.txt", "a", 0);
				$txt = "Meu nome é ".$nome . "\r\n". "Pode me contatar no telefone: " . $telefone . " ou no meu email: " .$email . "\r\n" . "Eu moro no endereço: " . $endereco . ".\r\n" . "Tenho " . $idade ." anos, " . $filho . "\r\n" . "Pretendo me candidatar ao(s) cargo(s) de" . $cargos . ".\r\n" . $exp_area . ".\r\n" . "Se tenho interesse em participar de treinamentos para adquirir e agregar conhecimento? " . $treinamento . ".\r\n" . "Gostaria de trabalhar em: " . $pref_loja . ".\r\n"."Já trabalhei como: " . $interesse_trabalho . "\r\n" . "Motivo para contratar-me: " . $razao_escolha . "\r\nVocê pode visualizar meu currículo neste link https://oticasespecialista.com.br/". $target_file . " \r\n\r\n\r\n";
				fputs($filetxt, $txt);
				fclose($filetxt);	
			}
	
	    } else {
	    	$error = 1;
	        $msg = "Houve um problema com seu upload, tente novamente mais tarde!";
	    }
	}
}
?>

<!DOCTYPE html>
<html lang="en" class=" js flexbox flexboxlegacy">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Ótica A Especialista</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="icon" href="img/favicon.png">

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/simple-line-icons.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body style="background-color: #009045">
		<header>
			<a href="index.html"><button class="btn-rs"><i class="icon-arrow-left-circle"></i>Voltar</button></a>
		</header>
		<div class="conteudo">
			<!-- Mostruario -->
			<section>
				<div class="col-md-3 col-sm-2 col-xs-1"></div>
				<div class="col-md-6 col-sm-8 col-xs-10 formulario">
					<?php if($error != 0): ?>
						<div class="resultado">
						<?php if($error == 2): ?>
							<div class="alert alert-success">
									<?php echo $msg ?>
							</div>
						<?php endif; ?>
						<?php if($error == 1): ?>
							<div class="alert alert-danger">
									<?php echo $msg ?>
							</div>
						<?php endif; ?>
						</div>
					<?php endif; ?>
					<div class="jumbotron text-center">
						<h1>Está disposto a se esforçar ao máximo para ser o melhor?</h1>
						<h2>Está disposto a ser cobrado diariamente por resultados?</h2>
						<h3>Você contribui para uma equipe de alta performance?</h3>
						<p>Então, clique no botão abaixo e envie seu currículo.</p>
					</div>
					<form class="form-group" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data">
						<p class="info-campos">* Campos Obrigatórios</p>
						<div class="linha-form">
							<label for="nome">Nome Completo: *</label>
							<input type="text" class="form-control" name="nome" required><br>
						</div>
						<div class="linha-form">
							<label for="email">Email: *</label>
							<input type="text" class="form-control" name="email" required><br>
						</div>
						<div class="linha-form">
							<label for="telefone">Telefone: *</label>
							<input type="text" class="form-control" minlength="8" name="telefone"><br>
						</div>
						<div class="linha-form">
							<label for="endereco">Endereço: *</label>
							<input type="text" class="form-control" name="endereco" required><br>
						</div>
						<div class="linha-form espaco-mais">
							<label for="idade">Idade: *</label>
							<input type="number" min="16" class="form-number" name="idade" required><br>
						</div>
						<div class="linha-form">
							<label for="filho">Possui Filhos? *</label><br>
							<input type="radio" name="filho" id="filho-sim" onchange="mostraCampo('filho')" value="sim">Sim
							<input type="radio" name="filho" id="filho-nao" onchange="escondeCampo('filho')" value="nao" checked>Não
						</div>
						<div class="linha-form espaco-mais">
							<label for="qtd_filhos">Quantos:</label>
							<input type="number" min="1" class="form-number" id="filho" name="qtd_filhos" disabled>
							<br>
						</div>
						<div class="linha-form espaco-mais">
							<label for="cargos">Qual cargo desejado?</label><br>
							<div class="grid-check">
								<input type="checkbox" name="cargos[]" value="Administrativo">Administrativo
							</div>
							<div class="grid-check">
								<input type="checkbox" name="cargos[]" value="Caixa">Caixa
							</div>
							<div class="grid-check">
								<input type="checkbox" name="cargos[]" value="Montador">Montador<br>
							</div>
							<div class="grid-check">
								<input type="checkbox" name="cargos[]" value="Auxiliar de Vendas">Auxiliar de Vendas
							</div>
							<div class="grid-check">
								<input type="checkbox" name="cargos[]" value="Gerente">Gerente
							</div>
							<div class="grid-check">
								<input type="checkbox" name="cargos[]" value="Vendedor">Vendedor<br>
							</div>
							<div class="grid-check">
								<input type="checkbox" name="cargos[]" value="Office Boy">Office Boy
							</div>
							<div class="grid-check">
								<input type="checkbox" name="cargos[]" value="Crediarista">Crediarista
							</div>
							<div class="grid-check">
								<input type="checkbox" name="cargos[]" value="Cobranca">Cobrança
							</div>
						</div>
						<div class="linha-form">
							<label for="exp_area">Tem experiência na área?</label><br>
							<input type="radio" value="sim" id="exp-sim" onchange="mostraCampo('exp')" name="exp_area">Sim
							<input type="radio" value="nao" id="exp-nao" onchange="escondeCampo('exp')" name="exp_area" checked>Não
						</div>
						<div class="linha-form espaco-mais">
							<label for="exp_area_texto">Qual?</label>
							<textarea name="exp_area_texto" id="exp" disabled></textarea>
						</div>
						<div class="linha-form espaco-mais">
							<label for="treinamento">Tem interesse em participar de treinamentos para adquirir e agregar conhecimento?</label>
							<input type="radio" name="treinamento" value="sim" checked>Sim
							<input type="radio" name="treinamento" value="nao">Não
						</div>
						<div class="linha-form espaco-mais">
							<label for="pref_loja">Gostaria de trabalhar em qualquer loja da rede Especialista/Cluebe, mas se puder escolher, prefiro a que está localizada em:</label>
							<div class="grid-check">
								<input type="radio" name="pref_loja" value="Araucária">Araucária
							</div>
							<div class="grid-check">
								<input type="radio" name="pref_loja" value="São José dos Pinhais">São José dos Pinhais
							</div>
							<div class="grid-check">
								<input type="radio" name="pref_loja" value="Campo Largo">Campo Largo
							</div>
						</div>
						<div class="linha-form espaco-mais">
							<label for="interesse_trabalho">Suponho que se interesse em saber que trabalhei como:</label>
							<textarea name="interesse_trabalho"></textarea>
						</div>
						<div class="linha-form espaco-mais">
							<label for="razao_escolha">Porque devemos escolher você? *</label>
							<textarea name="razao_escolha" required></textarea>
						</div>
					  		<label>Currículo *</label><br>
					  		<label for="curriculo" id="label"><i class="icon-paper-clip"></i></label>
					  		<label class="thin">Tamanho Maximo 5MB</label>
					  		<input type="file" id="curriculo" name="curriculo" required><br><br>
				  		<button type="submit" class="btn-equipe">Enviar</button><p class="text-btn">Seu curricúlo sera avaliado e você sera contato se houver uma vaga que se encaixe com oseu perfil.<br>Boa Sorte!</p>
					</form>
				</div>
			</section>
			<footer>
				<div class="col-esq" id="branco" style="width: 100%">
					Ótica A Especialista - Desenvolvido por <a href="https://upagencia.com/" title="Saiba mais sobre a UP Agência">UP Agência</a>
				</div>
			</footer>
			<!-- Rodapé Fim -->
		</div>
		<!-- Conteudo Fim -->

		<!-- Scripts -->
		<script type="text/javascript" src="js/main.js"></script>
		<!-- Scripsts Fim -->

	</body>
</html>