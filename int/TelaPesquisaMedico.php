<?php
// Tela de pesquisa de UBS

//session_start();
include('../banco/bancoConexao.php');
include('funcoes.php');

cabecalho(true,"", "", "PESQUISA");//abre tag html, cabeçalho e body
echo "Medico pesquisado: ";
pesquisarMedico();
tagDiv(true, "col-md-6");
imagemLink ("voltar.png","EstiloImagem", "pesquisarMedico.php", "30", "30");
tagDiv(true, "col-md-6");



?>