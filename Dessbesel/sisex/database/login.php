<?php

	require_once 'conecta.php';
	session_start();

	$email = strval($_POST['email']);
	$senha = strval($_POST['senha']);
	$lembrar_me = $_POST['lembrar_me'];
	
	$email = addslashes($email);
	$senha = addslashes($senha);

	// Busca login de lojistas
	$sql = mysqli_query($conexao, "SELECT ID FROM USUARIOS WHERE ((USUARIO = '".$email."') AND (SENHA = '".$senha."'))");

	if(mysqli_num_rows($sql)){
		
		$registro = mysqli_fetch_array($sql, MYSQLI_NUM);
		$id = $registro[0];
		$_SESSION['id'] = $id;

		$sql2 = mysqli_query($conexao, "SELECT PERMISSAO FROM PERMISSOES WHERE (ID_USUARIO = $id)");
		while($registro2 = mysqli_fetch_array($sql2, MYSQLI_NUM)){
			$permissoes = $registro2[0];
		}
		if(count($permissoes) > 0){
			$_SESSION['permissoes'] = $permissoes;
			$retorno = array(true);
			// Cookies
			if($lembrar_me){
				$expira = time() + 60*60*24*30*12; // 1 ano    
	    		setcookie('cookieId', base64_encode(strval($id)), $expira, "/");
			}
			else{
				// Tratamento de erro de Cookies
			}
		}
		else{
			$retorno = array(false);
		}	
	}
	else{
		// Tratamento de erro
		$retorno = array(false);
	}

	echo json_encode($retorno);

?>