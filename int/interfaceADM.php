<?php
session_start();
// Pagina de acesso do Administrador
// CHAMAR A FUNÇÃO CABEÇALHO
include('funcoes.php');

cabecalho(true,"Pagina Inicial", "", "Area do Administrador");//abre tag html, cabeçalho e body

echo "Olá ".$_SESSION['nome_adm']." ";


//MENU DE OPÇÕES DO ADM
tagDiv(true, "");
tabela1(true);
linha(true);
coluna(true, "");
linkPg("GERENCIAR UBS", "formularioUBS.php");
coluna(true, "");
linkPg("GERENCIAR MÉDICOS", "formularioMedico.php");
coluna(false, "");
coluna(true, "");
linkPg("GERENCIAR EXAMES", "formularioExame.php");
coluna(false, "");
coluna(true, "");
linkPg("AJUDA", "");
coluna(false, "");
coluna(true, "");
linkPg("SAIR", "interface.php");
coluna(false, "");
linha(false);
tabela1(false);
tagDiv(false, "");






?>