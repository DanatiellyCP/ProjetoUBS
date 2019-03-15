<?php
	//session_start();
	include ('interface.php');
	include('funcoes.php');
	include('formularios.php');
	include ('../banco/bancoConexao.php');
	
	// conferindo senhas 
	
	function validaSenha(){
		$btnLogin = filter_input(INPUT_POST, 'btnLogin', FIlTER_SANITIZE_STRING);
		if($btnLogin){
			echo " Tentar logar";
			$usuario = filter_input(INPUT_POST, 'usuario', FIlTER_SANITIZE_STRING);
			$senha = filter_input(INPUT_POST, 'senha', FIlTER_SANITIZE_STRING);
			echo "$usuario - $senha";
			
		} else{
			$_SESSION['msg'] = "Pagina não encontrada";
			header("Location: interface.php");
		}
		
	}
	
		
?>