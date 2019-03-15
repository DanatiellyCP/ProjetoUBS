<?php
  include('funcoes.php');
  include('formularios.php');
  cabecalho(true,"Exame", "", "AGENDAR EXAME");//abre tag html, cabeçalho e body
  tagDiv(true, "col-md-6");
  imagemLink ("voltar.png","EstiloImagem", "interfaceUsuario.php", "30", "30");
  imagemLink ("lupa.png","EstiloImagem", "", "30", "30");
  imagemLink ("editar.png","EstiloImagem", "", "30", "30");
  imagemLink ("excluir.png","EstiloImagem", "", "30", "30");
  tagDiv(false,"");


  tagDiv(true, "col-md-6");
  formulario("true", "", "");
  caixaTexto("Codigo Exame", "text", "codExame","Digite o código do exame","");
  caixaTexto("cpf Paciente", "text", "cpfPaciente","Ex.: 000.000.000-00", "");
  caixaTexto("cpf Medico", "text", "cpfMedico","Ex.: 000.000.000-00", "");
  caixaTexto("Data Exame", "text", "dataExame", "Ex: ANO-MES-DIA","");
  caixaTexto("Horario Exame", "text", "horarioExame", "digite o horário do exame", "");
  caixaTexto("Descricao Exame", "text", "descricaoExame", "Digite a descrição do exame", "");
  caixaTexto("id Exame", "text", "idExame", "Digite o ID do exame", "");
  tagDiv(true, "col-md-6");
  botao("submit" , "Agendar", "", ""); 
  tagDiv(false, "");   
  formulario("false", "", "");
  tagDiv(false,"");

  
?>
