<?php
//include('../css/bootstrap/bootstrap.css');
//@import url("css/bootstrap/bootstrap.css");
//@import url "../css/estilo.css";
	function cabecalho ($abrir,$titulo, $tema, $subtema) {
	
	if ($abrir == true)
	{
		echo <<<HTML
		
		<html>
		   <head>
			<!-- Framework Bootstrap-->
			<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
			
			<link rel="stylesheet" href="Estilo2.css" tipe="text/css"> 
			
			<script type="text/javascript" src="js/jquery.js"> </script>

			<script type="text/JavaScript" src="JavaScripUBS.js"></script>
		
		<title>$titulo</title> 
			<center>
				<h1 class="DesignTexto">$tema </h1>
				<h2 class="Texto">$subtema </h2>
			 </center>
			 
			 
			</head>
			<body class="DesignPG">
HTML;
	}
	else
	{
		echo "</body> </html>";
	}
	
}

function header1($abrir){
	if ($abrir == true){
	echo <<<HTML
	<header class="EstilhoCabecalho">

HTML;
}
else{
	echo "</header>";
}

}

 

function imagem ($endereco,$classe, $altura, $largura, $legenda, $paragrafo){
	
	echo <<<HTML
	<center>
	<figure class="FotoLegenda">
		<img src="$endereco" class="$classe" height="$altura" width="$largura"/>
	
	<figcaption>
		<h1>$legenda</h1>
		<p>$paragrafo</p>
	</figcaption>

	</figure>
	</center>
HTML;
}


function tagDiv ($abrir, $classe){
	if ($abrir == true)
	{
		echo <<<HTML
		<div class="$classe" >
		</br>
HTML;
	}
	else
	{
		echo "</div>";
	}
} 



function tabela1($abrir){
	
	if ($abrir == true)
		{
			echo <<<HTML
			<table style="width:100%" class="BordaTabela">
HTML;
	}
	else
	{
		echo "</table>"	;	
	}
}

function linha($abrir){
	
	if ($abrir == true)
		{
			echo <<<HTML
			<tr class="BordaLinha">
HTML;
	}
	else
	{
		echo "</tr>"	;	
	}
}

function coluna($abrir, $txColuna){
	
	if ($abrir == true)
		{
			echo <<<HTML
			<th class="BordaColuna"> $txColuna
HTML;
	}
	else
	{
		echo "</th>"	;	
	}
}

function textoSubtitulo ($texto){
	echo <<<HTML
			<center>
				<h2 class="Texto">$texto</h2>
			</center>
			
			
			
HTML;
}

function linkPg($nomeLink, $enderecoPg){
	echo <<<HTML
		</br>
		<a href = "$enderecoPg" class="DesignTexto"> $nomeLink </a> 
HTML;
}


function imagemLink ($endereco,$classe, $linkImg, $altura, $largura){
	
	echo <<<HTML

	<a href="$linkImg"$>
	<img src="$endereco" class="$classe" height="$altura" width="$largura" classe="EstiloImagem">
	</a>
HTML;
}

function areaTexto (){
	
	echo <<<HTML
	<textarea rows="4" cols="50">
	
	</textarea>
HTML;
}


function textoTitulo ($texto){
	echo <<<HTML
			
			<center>
				<h1 class="Texto">$texto</h1>
			</center>
			
			
HTML;
}


	

?>