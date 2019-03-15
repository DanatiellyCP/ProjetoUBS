<?php
	include('funcoes.php');
	include('formularios.php');
	include ('../banco/bancoConexao.php');

  	cabecalho(true,"UBS", "CONTROLE DE UBS", "PESQUISA DE UBS");//abre tag html, cabeçalho e body

  	imagemLink ("voltar.png","EstiloImagem", "formularioUBS.php", "30", "30");

	//Formulario de pesquisa
	tagDiv(true, "col-md-6");
	formulario ("true", "TelaPesquisa.php", "formPesquisa");//abre o formulario de pesquisa
	tagDiv(true, "col-md-6");
	caixaTexto("Informe o nome da UBS que deseja pesquisar","text","pesquisaUBS", "Digite o nome da UBS","");
	botao("submit", "Pesquisar", "btnPesquisar", ""); // chamando função de botao passando parametro de submit
	tagDiv(false, "col-md-6");
	formulario ("false", "", "");//fecha o formulario de pesquisa
	tagDiv(false, "");

	
	textoSubtitulo("Todas as unidades Cadastradas no Sistema");
	printaBancoUBS(); // printa uma tabela com todas as UBSs cadastradas no banco

	
	
	cabecalho(false,"", "", "", "");//fecha tag html, cabeçalho e body
?>