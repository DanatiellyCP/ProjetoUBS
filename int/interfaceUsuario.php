<?php
session_start();
// Pagina de acesso do Administrador
// CHAMAR A FUNÇÃO CABEÇALHO
include('funcoes.php');

cabecalho(true,"Pagina Inicial", "", "");//abre tag html, cabeçalho e body
header1(true);

echo "Olá Usuário";

textoSubtitulo ("Área do Usuário");
echo ("Pagina em construção. em breve! ");
header1(false);

//MENU DE OPÇÕES DO USUÁRIO PACIENTE
tagDiv(true, "col-md-6");
tabela1(true);
linha(true);
coluna(true, "");
linkPg("AGENDAR EXAME", "formularioAgendarExame.php");
coluna(false, "");
coluna(true, "");
linkPg("AGENDAR CONSULTA", "");
coluna(false, "");
coluna(true, "");
linkPg("AJUDA", "");
coluna(false, "");
coluna(true, "");
linkPg("SAIR", "interface.php");
coluna(false, "");
linha(false);
tabela1(false);
tagDiv(false, "col-md-6");



?>