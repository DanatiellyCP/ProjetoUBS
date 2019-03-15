<?php
// PAGINA DE EDIÇÃO DE CADASTRO DE UBS
// CHAMAR FUNÇÕES DE FORMULARIO 
// CHAMAR FUNÇÕES DE funcoes.php
//session_start();
include('funcoes.php');
include('formularios.php');
include ('../banco/bancoConexao.php');

cabecalho(true,"UBS", "CONTROLE DE UBS", "EDITAR INFORMAÇÕES DE UBS");//abre tag html, cabeçalho e body

imagemLink ("voltar.png","EstiloImagem", "formularioUBS.php", "30", "30");

//Formulario de cadastro de UBS
tagDiv(true, "col-md-6");
formulario ("true", "", "formCadastro");//abre o formulario de cadastro de UBSs
//contornoFormulario ("true", ""); // abre o fildest
//inputs das caixas de texto 
caixaTexto("Digite o codigo para alteração", "text", "codAltear", "Digite o Código da UBS", "");
// campo com codigo a ser alterado 

caixaTexto("Nome UBS", "text", "nomeUBS", "Digite o Nome da UBS", "");
caixaTexto("Codigo UBS", "text", "codUBS", "Digite o Código da UBS","");
caixaTexto("Bairro UBS", "text", "bairroUBS", "Digite o Bairro da UBS", "");
caixaTexto("Rua UBS", "text", "ruaUBS", "Digite a Rua da UBS","");
caixaTexto("N° UBS", "text", "numeroUBS", "Digite o número da UBS","");
caixaTexto("Telefone UBS", "text", "telefoneUBS", "11XXXXXXXX", "");
caixaTexto("E-mail UBS", "text", "emailUBS", "Digite o E-mail da UBS", "");
// inputs dos botões de ação do ususario
tagDiv(true, "col-md-6");
botao("submit", "Alterar", "btnAlterar", ""); // chamando função de botao passando parametro de submit
botao("reset", "Limpar", "", ""); // chamando função de botao passando parametro de reset

tagDiv(false, "col-md-6");

formulario ("false", "", "");//fecha o formulario de cadastro de UBSs
tagDiv(false, "col-md-6");// fecha a div do form

//link para sair
//linkPg("Voltar", "formularioUBS.php");

editarUBS();
printaBancoUBS(); // printa uma tabela com todas as UBSs cadastradas no banco


?>