<?php
	include('funcoes.php');
	include('formularios.php');
	include ('../banco/bancoConexao.php');

  	cabecalho(true,"UBS", "CONTROLE DE UBS", "PESQUISA DE EXAMES");//abre tag html, cabeçalho e body
	//Formulario de pesquisa

	imagemLink ("voltar.png","EstiloImagem", "formularioExame.php", "30", "30");
	
	tagDiv(true, "col-md-6");
	formulario ("true", "TelaPesquisaExame.php", "formPesquisaExame");//abre o formulario de pesquisa
	caixaTexto("Informe o nome do Exame que deseja pesquisar", "text", "pesquisaExame", "Digite o nome do exame", "");
	
	botao("submit", "Pesquisar", "btnPesquisarExame", ""); // chamando função de botao passando parametro de submit
	formulario ("false", "", "");//fecha o formulario de pesquisa
	tagDiv(false, "");


	textoSubtitulo("Todos os Exames Cadastrados no Sistema");
	printaBancoExame(); // printa uma tabela com todas os Exame cadastradas no banco

	


	cabecalho(false,"", "", "", "");//fecha tag html, cabeçalho e body
?>