<?php
//CODIGO DE TESTE DE USUARIO DO BANCO DE DADOS E DO SISTEMA UBS
	session_start();
	include('../banco/bancoConexao.php');
	$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
	if($btnLogin){
		$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
		$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
		//echo "$usuario - $senha";
		if((!empty($usuario)) AND (!empty($senha)) ){
			//pesquisqar o usuario no banco de dados
			$result_usuario = " SELECT nome_adm, cpf_adm FROM adm WHERE nome_adm = '$usuario'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			if($resultado_usuario){
				$row_usuario = mysqli_fetch_assoc($resultado_usuario);
				if ($senha == $row_usuario['cpf_adm']){
					$_SESSION['nome_adm'] = $row_usuario['nome_adm'];
				
					header("Location: interfaceADM.php");
				}
				else{
					$_SESSION['msg'] = "Login ou senha incorreto";
					header("Location: telaLogin.php");
					//echo "<script> alert('Login ou senha incorreto');Location:telaLogin.php</script>";
				}
				
			}
			
			
		}else{
			$_SESSION['msg'] = "Login e senha incorreto";
		header("Location: telaLogin.php");
		}
	}else{
		$_SESSION['msg'] = "Pagina não enontrada";
		header("Location: telaLogin.php");
	}
	
?>