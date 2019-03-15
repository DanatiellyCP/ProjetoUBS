<?php
// PAGINA DE EDIÇÃO DE CADASTRO DE MEDICOS
// CHAMAR FUNÇÕES DE FORMULARIO 
// CHAMAR FUNÇÕES DE funcoes.php
//session_start();
include('funcoes.php');
include('formularios.php');
include ('../banco/bancoConexao.php');

cabecalho(true,"UBS", "CONTROLE DE UBS", "EDITAR INFORMAÇÕES MÉDICO");//abre tag html, cabeçalho e body

imagemLink ("voltar.png","EstiloImagem", "formularioMedico.php", "30", "30");
//Formulario de cadastro de UBS
tagDiv(true, "col-md-6");
formulario ("true", "", "formCadastro");//abre o formulario de cadastro de UBSs

//inputs das caixas de texto 
caixaTexto("CPF do Médico para alteração", "text", "CPFMedicoAlterar", "Digite o CPF do Médico", "");// campo com CPF a ser alterado 

caixaTexto("Nome Médico", "text", "nomeMedico", "Digite o nome do médico", "");
caixaTexto("CPF Médico", "text", "cpfMedico", "Ex.: 000.000.000-00", "");
caixaTexto("Data Nascimento Medico", "text", "dataMedico", "Ex: ANO-MÊS-DIA", "");

//caixa de seleção de sexo
 seleciona(true, "sexoMedico", "Sexo Medico");
  opcao(true, "feminino", "Feminino");
  opcao(false, "", "");
  opcao(true, "masculino", "Masculino");
  opcao(false, "", "");
  opcao(true, "outros", "Outros");
  opcao(false, "", "");
  seleciona(false, "","");

caixaTexto("Telefone Médico", "text", "telefoneMedico", "11XXXXXXXX", "");
caixaTexto("Celular Médico", "text", "celularMedico", "9XXXXXXX", "");
caixaTexto("E-mail Médico", "text", "emailMedico", "Digite o E-mail do médico", "");
caixaTexto("RG Médico", "text", "rgMedico", "Digite o RG do médico", "");
caixaTexto("Bairro Médico", "text", "bairroMedico", "Digite o bairro do médico", "");
caixaTexto("Rua Médico", "text", "ruaMedico", "Digite a rua do médico", "");
caixaTexto("Numero Médico", "text", "numeroMedico", "Digite o número do médico", "");
caixaTexto("crm Médico", "text", "crmMedico", "Digite o CRM", "");
caixaTexto("Especialidade Medico", "text", "especialidaMedico", "Digite a especialidade", "");
// inputs dos botões de ação do ususario
tagDiv(true, "col-md-6");
botao("submit", "Alterar", "btnAlterarMedico", ""); // chamando função de botao passando parametro de submit
botao("reset", "Limpar", "", ""); // chamando função de botao passando parametro de reset
tagDiv(false, "col-md-6");
formulario ("false", "", "");//fecha o formulario de cadastro de UBSs
tagDiv(false, "col-md-6");// fecha a div do form


textoSubtitulo("Todos os Medicos Cadastrados no Sistema");
editarMedico();
printaBancoMedico(); // printa  tabela Medico com todos cadastrados no banco


?>