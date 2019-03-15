
<?php
session_start();
// interface.php 
// UBS 
// CHAMAR A FUNÇÃO CABEÇALHO
include('funcoes.php');
include('formularios.php');
include('../banco/bancoConexao.php');


cabecalho(true,"Pagina Inic", "", "");//abre tag html, cabeçalho e body

header1(true); //abre o header

//textoTitulo ("Sistema de Gerenciamento online de UBS");

tagDiv(true, "col-md-6");
tabela1(true);
linha(true);
coluna(true, "");
linkPg("ADMINISTRAÇÃO", "telaLogin.php");
coluna(false, "");
coluna(true, "");
linkPg("ATENDENTE", "");
coluna(false, "");
coluna(true, "");
linkPg("USUÁRIO", "interfaceUsuario.php");
coluna(false, "");
coluna(true, "");
linkPg("NOTICIAS", "https://salto.sp.gov.br/site/");
coluna(false, "");
coluna(true, "");
linkPg("AJUDA", "");
coluna(false, "");
linha(false);
tabela1(false);
tagDiv(false, "");
textoTitulo ("Sistema de Gerenciamento online de UBS");

header1(false); //fecha o header

tagDiv(true, "");
imagem("SAUDE.jpg","", "", "", " S. G. O. U. - SISTEMA DE GERENCIAMENTO ONLINE DE UBS", "UMA NOVA FORMA DE CUIDAR DA SAÚDE DA POPULAÇÃO SALTENSE");
tagDiv(false, "");

tagDiv(true, "col-md-6");
textoSubtitulo("Todas as unidades da cidade de Salto");
tagDiv(false, "col-md-6");

// TABELA DE INFORMAÇÕES SOBRE DAS UBS 
printaBancoUBS();

tagDiv(false, "");




cabecalho(false,"", "", "", "");//fecha tag html, cabeçalho e body



 

	
	
?>