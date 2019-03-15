<?php
// PAGINA DE EDIÇÃO DE CADASTRO DE EXAMES
// CHAMAR FUNÇÕES DE FORMULARIO 
// CHAMAR FUNÇÕES DE funcoes.php
//session_start();
include('funcoes.php');
include('formularios.php');
include ('../banco/bancoConexao.php');

cabecalho(true,"UBS", "CONTROLE DE UBS", "EDITAR INFORMAÇÕES DE EXAMES");//abre tag html, cabeçalho e body

///linkPg("Voltar", "formularioMedico.php");
imagemLink ("voltar.png","EstiloImagem", "formularioExame.php", "30", "30");

//Formulario de cadastro de UBS
tagDiv(true, "col-md-6");
formulario ("true", "", "formCadastroExame");//abre o formulario de cadastro de UBSs
//inputs das caixas de texto 
caixaTexto("Digite o codigo do exame para alteração","text", "codExameAlter","Digite o codigo do exame", "");// campo com CPF a ser alterado 
caixaTexto("Nome Exame", "text", "nomeExame", "Digite o nome do exame","");
caixaTexto("Tipo Exame", "text", "tipoExame", "Digite o tipo do exame","");
caixaTexto("Especialidade Exame", "text", "especialidadeExame", "Digite a especialidade do exame","");
caixaTexto("Código Exame", "text", "codExame", "Digite o código do exame","");
caixaTexto("Descrição Exame", "text", "descricaoExame", "Digite a descrição do exame","");
caixaTexto("Nome do Laboratorio", "text", "nomeLaboratorio", "Digite o nomedo laboratório","");
// inputs dos botões de ação do ususario
tagDiv(true, "");
botao("submit", "Editar", "btnAlterarExame", ""); // chamando função de botao passando parametro de submit
botao("reset", "Limpar", "", ""); // chamando função de botao passando parametro de reset
tagDiv(false, "");
formulario ("false", "", "");//fecha o formulario de cadastro de UBSs
tagDiv(false, "");// fecha a div do form

textoSubtitulo ("TODOS OS EXAMES CADASTRADOS NO SISTEMA");
editarExame();
printaBancoExame(); // printa  tabela Exame com todos cadastrados no banco


?>