<?php
// PAGINA DE CADASTRO DE UBS
// CHAMAR FUNÇÕES DE FORMULARIO 
// CHAMAR FUNÇÕES DE funcoes.php
//session_start();
include('funcoes.php');
include('formularios.php');
include ('../banco/bancoConexao.php');

cabecalho(true,"UBS", "CONTROLE DE UBS", "CADASTRO DE UBS ");//abre tag html, cabeçalho e body

tagDiv(true, "col-md-6");
imagemLink ("voltar.png","EstiloImagem", "interfaceADM.php", "30", "30");
imagemLink ("lupa.png","EstiloImagem", "pesquisarUBS.php", "30", "30");
imagemLink ("editar.png","EstiloImagem", "editarUBS.php", "30", "30");
imagemLink ("excluir.png","EstiloImagem", "excluiUBS.php", "30", "30");
tagDiv(false, "");

//Formulario de cadastro de UBS
tagDiv(true, "col-md-6");
formulario ("true", "", "formCadastro");//abre o formulario de cadastro de UBSs
//contornoFormulario ("true", ""); // abre o fildest
//inputs das caixas de texto 
caixaTexto("Nome UBS", "text", "nomeUBS", "", "nomeUBS");
caixaTexto("Codigo UBS", "text", "codUBS", "", "codUBS");
caixaTexto("Bairro UBS", "text", "bairroUBS", "", "bairroUBS");
caixaTexto("Rua UBS", "text", "ruaUBS", "", "ruaUBS");
caixaTexto("N° UBS", "text", "numeroUBS", "", "numeroUBS");
caixaTexto("Telefone UBS", "text", "telefoneUBS", "","telefoneUBS");
caixaTexto("E-mail UBS", "text", "emailUBS", "", "emailUBS");
// inputs dos botões de ação do ususario
tagDiv(true, "col-md-6");
botao("submit", "Cadastrar", "btnCadastrar", "ValidarUBS()"); // chamando função de botao passando parametro de submit
botao("reset", "Limpar", "", ""); // chamando função de botao passando parametro de reset
//linkPg("Pesquisar", "telaLogin.php");
tagDiv(false, "col-md-6");

formulario ("false", "", "");//fecha o formulario de cadastro de UBSs
tagDiv(false, "col-md-6");// fecha a div do form



//link para sair
//linkPg("Voltar", "interfaceADM.php");

//conecta();

insereUbs();

//textoSubtitulo ("UBSs Cadastradas no Banco de dados do sistema");
//printaBancoUBS();

?>