<?php
	include('funcoes.php');
	include('formularios.php');
	include ('../banco/bancoConexao.php');

	
  	cabecalho(true,"UBS", "CONTROLE DE UBS", "EXCLUIR MÉDICO");//abre tag html, cabeçalho e body

	imagemLink ("voltar.png","EstiloImagem", "formularioMedico.php", "30", "30");

	//Formulario de pesquisa
	tagDiv(true, "col-md-6");
	formulario ("true", "", "formExcluiMedico");//abre o formulario de pesquisa
	caixaTexto("Informe o nome do Médico que deseja excluir", "text", "excluiMedico", "Digite o nome do médico", "");
	botao("submit", "Excluir", "btnExcluirMedico", ""); // chamando função de botao passando parametro de submit
	formulario ("false", "", "");//fecha o formulario de pesquisa
	tagDiv(false, "");

	excluirMedico(); // função de exclusão de médico do banco de dados

	textoSubtitulo("Todos Médicos Cadastrados no Sistema");
	printaBancoMedico(); // printa uma tabela com todas as UBSs cadastradas no banco

	
	cabecalho(false,"", "", "", "");//fecha tag html, cabeçalho e body
?>