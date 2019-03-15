<?php
  include('funcoes.php');
  include('formularios.php');
  include ('../banco/bancoConexao.php');
  cabecalho(true,"Medico", "CONTROLE DE UBS", "CADASTRO DE MÉDICOS");//abre tag html, cabeçalho e body

  tagDiv(true, "col-md-6");
  imagemLink ("voltar.png","EstiloImagem", "interfaceADM.php", "30", "30");
  imagemLink ("lupa.png","EstiloImagem", "pesquisarMedico.php", "30", "30");
  imagemLink ("editar.png","EstiloImagem", "editarMedico.php", "30", "30");
  imagemLink ("excluir.png","EstiloImagem", "excuiMedico.php", "30", "30");
  tagDiv(false, "");

  tagDiv(true, "col-md-6");
  formulario("true", "", "formMedico");
  caixaTexto("Nome Medico", "text", "nomeMedico", "Digite o nome do médico","nomeMedico");
  caixaTexto("CPF Medico", "text", "cpfMedico", "Ex.: 000.000.000-00", "cpfMedico");
  caixaTexto("Data Nascimento Medico", "text", "dataMedico", "Ex: ANO-MES-DIA", "dataMedico");

  //caixa de seleção
  seleciona(true, "sexoMedico", "Sexo Medico");
  opcao(true, "feminino", "Feminino");
  opcao(false, "", "");
  opcao(true, "masculino", "Masculino");
  opcao(false, "", "");
  opcao(true, "outros", "Outros");
  opcao(false, "", "");
  seleciona(false, "","");
 
  caixaTexto("Telefone Medico", "text", "telefoneMedico", "11XXXXXXXX", "telefoneMedico");
  caixaTexto("Celular Medico", "text", "celularMedico", "9XXXXXXXX", "celularMedico");
  caixaTexto("Email Medico", "text", "emailMedico", "Digite o E-mail", "emailMedico");
  caixaTexto("RG Medico", "text", "rgMedico", "Digite o RG","rgMedico");
  caixaTexto("Bairro Medico", "text", "bairroMedico", "Digite o Bairro", "bairroMedico");
  caixaTexto("Rua Medico", "text", "ruaMedico", "Digite a Rua", "ruaMedico");
  caixaTexto("Numero Medico", "text", "numeroMedico", "Digite o Número", "numeroMedico");
  caixaTexto("crm Medico", "text", "crmMedico", "Digite o CRM", "crmMedico");
  caixaTexto("Especialidade Medico", "text", "especialidaMedico", "Digite a Especialidade","especialidaMedico");
  tagDiv(true, "col-md-6");
  botao("submit" , "Cadastrar", "btnCadastrarM", "ValidarMedico()"); 
  botao("reset", "Limpar", "", ""); // chamando função de botao passando parametro de reset
  tagDiv(false,"");   
  formulario("false", "", "");
  tagDiv(false,"");
  tagDiv(false,"");

 

  insereMedico();

 
?>