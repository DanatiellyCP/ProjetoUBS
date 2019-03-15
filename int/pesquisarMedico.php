<?php
	include('funcoes.php');
	include('formularios.php');
	include ('../banco/bancoConexao.php');

  	cabecalho(true,"UBS", "CONTROLE DE UBS", "PESQUISA DE MÉDICOS");//abre tag html, cabeçalho e body

	imagemLink ("voltar.png","EstiloImagem", "formularioMedico.php", "30", "30");
	

	//Formulario de pesquisa
	tagDiv(true, "col-md-6");
	formulario ("true", "TelaPesquisaMedico.php", "formPesquisaMedico");//abre o formulario de pesquisa
	caixaTexto("Informe o nome do Médico que deseja pesquisar", "text", "pesquisaMedico", "Digite o nome do médico", "");
	botao("submit", "Pesquisar", "btnPesquisarMedico", ""); // chamando função de botao passando parametro de submit
	formulario ("false", "", "");//fecha o formulario de pesquisa
	tagDiv(false, "col-md-6");


	textoSubtitulo("Todos os Medicos Cadastrados no Sistema");
	printaBancoMedico(); // printa uma tabela com todas as UBSs cadastradas no banco

	
	cabecalho(false,"", "", "", "");//fecha tag html, cabeçalho e body
?>