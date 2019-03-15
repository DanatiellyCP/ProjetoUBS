<?php
	include('funcoes.php');
	include('formularios.php');
	include ('../banco/bancoConexao.php');

  	cabecalho(true,"UBS", "CONTROLE DE UBS", "EXCLUIR UBS");//abre tag html, cabeçalho e body
	//Formulario de pesquisa
tagDiv(true, "col-md-6");
imagemLink ("voltar.png","EstiloImagem", "formularioUBS.php", "30", "30");
tagDiv(false, "");

tagDiv(true, "col-md-6");
formulario ("true", "", "formExcluiUBS");//abre o formulario de pesquisa
tagDiv(true, "col-md-6");
caixaTexto("Informe o nome da UBS que deseja excluir","text","excluiUBS","Digite o nome da UBS", "");
botao("submit", "Excluir", "btnExcluirUBS", ""); // chamando função de botao passando parametro de submit
tagDiv(false, "col-md-6");
formulario ("false", "", "");//fecha o formulario de pesquisa
tagDiv(false, "col-md-6");
excluirUBS();

textoSubtitulo("Todas as unidades Cadastradas no Sistema");
printaBancoUBS(); // printa uma tabela com todas as UBSs cadastradas no banco


cabecalho(false,"", "", "", "");//fecha tag html, cabeçalho e body
?>