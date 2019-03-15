<?php
  include('funcoes.php');
  include('formularios.php');
  include ('../banco/bancoConexao.php');
  cabecalho(true,"Exame", "CONTROLE DE UBS", "CADASTRO DE EXAMES ");//abre tag html, cabeçalho e body

  tagDiv(true, "col-md-6");
  imagemLink ("voltar.png","EstiloImagem", "interfaceADM.php", "30", "30");
  imagemLink ("lupa.png","EstiloImagem", "pesquisaExame.php", "30", "30");
  imagemLink ("editar.png","EstiloImagem", "editarExame.php", "30", "30");
  imagemLink ("excluir.png","EstiloImagem", "excluiExame.php", "30", "30");
  tagDiv(false,"");

 
  tagDiv(true, "col-md-6");
  formulario("true", "", "");
  //contornoFormulario("true");
  caixaTexto("Nome Exame", "text", "nomeExame", "Digite o nome do Exame", "");
  caixaTexto("Tipo Exame", "text", "tipoExame", "Digite o Tipo do Exame", "");
  caixaTexto("Especialidade Exame", "text", "especialidadeExame","Digite a Especialidade do Exame", "");
  caixaTexto("Código Exame", "text", "codigoExame", "Digite o Código do Exame", "");
  caixaTexto("Descricao Exame", "text", "descricaoExame", "Didite a descrição do Exame", "");
  caixaTexto("Nome Laboratorio", "text", "nomeLaboratorio", "Digite o nome do Laboratório", "");
  tagDiv(true, "col-md-6");
  botao("submit" , "Cadastrar", "", "");
  botao("reset", "Limpar", "", ""); // chamando função de botao passando parametro de reset    
  formulario("false", "", "");
  tagDiv(false,"");
  tagDiv(false,"");

  
  inserirExame();

  

?>