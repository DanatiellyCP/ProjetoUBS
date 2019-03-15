<?php
// Tela de pesquisa de UBS

//session_start();
include('../banco/bancoConexao.php');
include('funcoes.php');

cabecalho(true,"Pagina Inicial", "", "PESQUISA");//abre tag html, cabeçalho e body
echo "UBS pesquisada: ";
pesquisaUBS();
tagDiv(true, "col-md-6");
imagemLink ("voltar.png","EstiloImagem", "pesquisarUBS.php", "30", "30");
tagDiv(true, "col-md-6");




?>