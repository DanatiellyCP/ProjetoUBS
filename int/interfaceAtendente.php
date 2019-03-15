<?php
session_start();
// Pagina de acesso do Administrador
// CHAMAR A FUNÇÃO CABEÇALHO
include('funcoes.php');

cabecalho(true,"Pagina Inicial", "Bem Vindo Usuário", "Sistema Web de Gerenciamento de UBS ");//abre tag html, cabeçalho e body

//echo "Olá ".$_SESSION['nome_adm']." ";
imagemLink ("voltar.png","", "interface.php", "20", "20");
echo "Olá Atendente";
textoSubtitulo ("Área do Atendente");
echo ("Pagina em construção. em breve ");
//echo "Selecione a imagem com a opção que deseja gerenciar";
//tagDiv(true, "col-md-6");
//imagemLink ("ubsDesenho.jpg","", "formularioUBS.php", "200", "300");
//imagemLink ("medico.png","", "formularioMedico.php", "200", "300");
//imagemLink ("exame.jpg","", "formularioExame.php", "200", "300");
//tagDiv(false, "col-md-6");

//linkPg("Sair", "interface.php");

//MENU DE OPÇÕES DO ATENDENTE
tagDiv(true, "col-md-6");
tabela1(true);
linha(true);
coluna(true, "");
linkPg("CADASTRAR PACIENTE", "");
coluna(false, "");
coluna(true, "");
linkPg("AGENDAR EXAME", "");
coluna(false, "");
coluna(true, "");
linkPg("AGENDAR CONSULTA", "");
coluna(false, "");
coluna(true, "");
linkPg("AJUDA", "");
coluna(false, "");
linha(false);
tabela1(false);
tagDiv(false, "col-md-6");



?>