<?php
// Tela de pesquisa de Exames

//session_start();
include('../banco/bancoConexao.php');
include('funcoes.php');

cabecalho(true,"Pagina Inicial", "", "PESQUISA");//abre tag html, cabeçalho e body
echo "Exame pesquisado: ";

pesquisarExame();

tagDiv(true, "col-md-6");
imagemLink ("voltar.png","EstiloImagem", "pesquisaExame.php", "30", "30");
tagDiv(true, "col-md-6");


?>