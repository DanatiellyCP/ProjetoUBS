<?php
  include('funcoes.php');
  include('formularios.php');
  cabecalho(true,"Paciente", "Controle de Paciente", "Sistema Web de Gerenciamento de UBS ");//abre tag html, cabeçalho e body
  tagDiv(true, "col-md-6");
  formulario("true");
  contornoFormulario("true");
  caixaTexto("Nome Paciente", "text", "nomePaciente");
  caixaTexto("CPF Paciente", "text", "cpfPaciente");
  caixaTexto("Data Nascimento Paciente", "text", "dataPaciente");
  caixaTexto("Sexo Paciente", "text", "sexoPaciente");
  caixaTexto("Telefone Paciente", "text", "telefonePaciente");
  caixaTexto("Celular Paciente", "text", "celularPaciente");
  caixaTexto("Email Paciente", "text", "emailPaciente");
  caixaTexto("RG Paciente", "text", "rgPaciente");
  caixaTexto("Bairro Paciente", "text", "bairroPaciente");
  caixaTexto("Rua Paciente", "text", "ruaPaciente");
  caixaTexto("Numero Paciente", "text", "numeroPaciente");
  caixaTexto("carteira sus Paciente", "text", "cateiraSusPaciente");
  caixaTexto("codigo ubs Paciente", "text", "codigoUbsPaciente");
  botao("submit" , "cadastrar");
  formulario("false");
  tagDiv(false,"");
  
?>