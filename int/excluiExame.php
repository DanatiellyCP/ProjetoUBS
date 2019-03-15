<?php
	include('funcoes.php');
	include('formularios.php');
	include ('../banco/bancoConexao.php');

cabecalho(true,"UBS", "CONTROLE DE UBS", "EXCLUIR EXAME");//abre tag html, cabeçalho e body
	//Formulario de pesquisa

imagemLink ("voltar.png","EstiloImagem", "formularioExame.php", "30", "30");

tagDiv(true, "col-md-6");
formulario ("true", "", "formExcluiExame");//abre o formulario de pesquisa
caixaTexto("Informe o nome do Exame que deseja excluir","text","excluiExame","Digite o nome do exame","");
tagDiv(true, "col-md-6");
botao("submit", "Excluir", "btnExcluirExame", ""); // chamando função de botao passando parametro de submit
tagDiv(false, "col-md-6");
formulario ("false", "", "");//fecha o formulario de pesquisa
tagDiv(false, "");
excluirExame();

textoSubtitulo("Todos Exames Cadastrados no Sistema");
printaBancoExame(); // printa uma tabela com todas as UBSs cadastradas no banco

cabecalho(false,"", "", "", "");//fecha tag html, cabeçalho e body
?>