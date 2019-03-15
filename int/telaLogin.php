<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>

	
}
</style>

<!-- parte de Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap/bootstrap.css"> 
		<script type="text/javascript" src="..js/jquery.js"> </script>
		<link rel="stylesheet" href="Estilo2.css" tipe="text/css"> 

</head>
<body class="DesignPG">

<h1 class="Texto">Entrar no SGUBS </h1>


<?php
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}

?>
<div class="form-group">
	<form method="post" action="testaLogin.php">
		Usuário: </br>
		<input type="text" name="usuario" placeholder="Digite seu nome de ususario"></br>
		Senha: </br>
		<input type="password" name="senha" placeholder="Digite sua senha"></br>
		</br>
		<div>
		<input type="submit" name="btnLogin" value="Acessar" class="EstiloBotao">
		</div>
	</form>

</div>

</br>
		<a href="interface.php"$>
			<img src="voltar.png" class="EstiloImagem" height="20" width="20">
		</a>

</body>
</html>