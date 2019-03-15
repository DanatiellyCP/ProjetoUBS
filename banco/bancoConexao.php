<?php
// classe de conexão com o banco de dados
// string de conexão com o banco de dados

// Para o teste de senha ----------------------------------------
$servidor = "localhost";
$USUARIO = "root";
$SENHA = "";
$dbname = "ubs";
// criar a conecção
$conn = mysqli_connect($servidor, $USUARIO, $SENHA, $dbname);
// Para o teste de senha ----------------------------------------


function conecta(){
// string de conexão com o banco de dados
$db = new PDO ("mysql:host=localhost;dbname=ubs", "root", "");
echo "conectado!";	
}	

//FUNÇÃO DE PRINTAR A TABELA DO BANCO UBS COM TODOS OS DADOS
function printaBancoUBS(){
// string de conexão com o banco de dados
$db = new PDO ("mysql:host=localhost;dbname=ubs", "root", "");	

$dados = $db->query("select * from ubs"); // consulta ao banco 

echo <<<HTML
	<table>
HTML;
echo <<<HTML
	<tr>
		<td width="100">Nome UBS</td>
		<td width="100">Bairro</td>
		<td width="100">Rua</td>
		<td width="100">Numero</td>
		<td width="100">Código</td>
		<td width="100">Telefone</td>
		<td width="100">E-mail</td>
	</tr>
HTML;
// percorrendo o banco
while ($row = $dados->fetch()){
	echo <<<HTML
		<tr>
		<td WIDTH=100> $row[0]</td>
		<td WIDTH=100>$row[1]</td>
		<td WIDTH=100>$row[2]</td>
		<td WIDTH=100>$row[3]</td>
		<td WIDTH=100>$row[4]</td>
		<td WIDTH=100>$row[5]</td>
		<td WIDTH=100>$row[6]</td>
		</tr>

HTML;
	}
echo <<<HTML
	</table>
HTML;

}

// FUNÇÃO DE INSERIR DADOS NA TABELA UBS
function insereUbs(){
// string de conexão com o banco de dados
$db = new PDO ("mysql:host=localhost;dbname=ubs", "root", "");	
// recuperando os dados vindos dos texts box por post
if (isset($_POST["nomeUBS"])){	// esse if testa os endereços das caixas de texto
$NomeUbs = $_POST['nomeUBS'];
$CodUbs = $_POST['codUBS'];
$BairroUbs = $_POST['bairroUBS'];
$RuaUBS = $_POST['ruaUBS'];
$NumeroUBS = $_POST['numeroUBS'];
$TelefoneUBS = $_POST['telefoneUBS'];
$EmailUBS = $_POST['emailUBS'];
// inserido os dados digitados nas text box no banco de dados UBS
$db->exec("INSERT INTO ubs (nome_ubs, bairro_ubs, rua_ubs, numero_ubs, cod_ubs, telefone_ubs, email_ubs) VALUES ('$NomeUbs','$BairroUbs','$RuaUBS', '$NumeroUBS', '$CodUbs', '$TelefoneUBS', '$EmailUBS')");
}
}


function pesquisaUBS(){
		// string de conexão com o banco de dados
		$db = new PDO ("mysql:host=localhost;dbname=ubs", "root", "");
		if (isset($_POST["pesquisaUBS"])){
			$NomeUbs = $_POST['pesquisaUBS'];
			$dados = $db->query("select * from ubs WHERE nome_ubs = '$NomeUbs'"); // consulta ao banco 
			echo "$NomeUbs";
			while ($row = $dados->fetch()){
				echo <<<HTML
				<div>
				<table>
				<tr>
				<td width="100">Nome UBS</td>
				<td width="100">Bairro</td>
				<td width="100">Rua</td>
				<td width="100">Numero</td>
				<td width="100">Código</td>
				<td width="100">Telefone</td>
				<td width="100">E-mail</td>
				</tr>

				<tr>
				<td WIDTH=100>$row[0]</td>
				<td WIDTH=100>$row[1]</td>
				<td WIDTH=100>$row[2]</td>
				<td WIDTH=100>$row[3]</td>
				<td WIDTH=100>$row[4]</td>
				<td WIDTH=100>$row[5]</td>
				<td WIDTH=100>$row[6]</td>
				</tr>
				</table>
			</div>
HTML;
	}
	}
}

//Função de alteração de dados de UBS
function editarUBS(){
	// string de conexão com o banco de dados
	$db = new PDO ("mysql:host=localhost;dbname=ubs", "root", "");

	// codigo de alteração dos dados da ubs no banco de dados
	if (isset($_POST["nomeUBS"])){	// esse if testa os endereços das caixas de texto
	$NomeUbs = $_POST['nomeUBS'];
	$CodUbs = $_POST['codUBS'];
	$BairroUbs = $_POST['bairroUBS'];
	$RuaUBS = $_POST['ruaUBS'];
	$NumeroUBS = $_POST['numeroUBS'];
	$TelefoneUBS = $_POST['telefoneUBS'];
	$EmailUBS = $_POST['emailUBS'];
	$CodAlterar = $_POST['codAltear'];

	// alterando  os dados digitados nas text box no banco de dados UBS
	$db->exec("UPDATE ubs SET 
		nome_ubs = '$NomeUbs', 
		bairro_ubs = '$BairroUbs', 
		rua_ubs = '$RuaUBS', 
		numero_ubs = '$NumeroUBS', 
		cod_ubs = '$CodUbs', 
		telefone_ubs = '$TelefoneUBS', 
		email_ubs = '$EmailUBS'
		WHERE cod_ubs ='$CodAlterar'"); 

		tagDiv(true, "col-md-6");
		echo "Editado com Sucesso !";
		tagDiv(false, "col-md-6");
	
}

}

//função de exclusão de UBD
function excluirUBS(){
	$db = new PDO ("mysql:host=localhost;dbname=ubs", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if (isset($_POST["excluiUBS"])){
			$NomeUbs = $_POST['excluiUBS'];
			// sql to delete a record
    		$sql = "DELETE FROM ubs WHERE nome_ubs = '$NomeUbs'";

    		// use exec() because no results are returned
    		$db->exec($sql);
    		echo "Record deleted successfully";




			//$dados = $db->query("DELETE from ubs WHERE nome_ubs = '$NomeUbs'"); // consulta ao banco 
			//echo "$NomeUbs";
		}

	tagDiv(true, "col-md-6");
	echo " UBS Excluida do Sucesso !";
	tagDiv(false, "col-md-6");


}

//---------------------------------------------------------------------------------------------------------------------------------------
// --------------------------- PARTE DE BANCO DOS MÉDICOS -------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------

// Função para cadastrar medicos
function insereMedico(){
// string de conexão com o banco de dados
$db = new PDO ("mysql:host=localhost;dbname=ubs", "root", "");	
// recuperando os dados vindos dos texts box por post
if (isset($_POST["nomeMedico"])){	// esse if testa os endereços das caixas de texto
$NomeMedico = $_POST['nomeMedico'];
$CpfMeico = $_POST['cpfMedico'];
$DataMedico = $_POST['dataMedico'];
$SexoMedico = $_POST['sexoMedico'];
$TelefoneMedico = $_POST['telefoneMedico'];
$CelularMedico = $_POST['celularMedico'];
$EmailMedico = $_POST['emailMedico'];
$RGMedico = $_POST['rgMedico'];
$BairroMedico = $_POST['bairroMedico'];
$RuaMedico = $_POST['ruaMedico'];
$NumeroMedico = $_POST['numeroMedico'];
$CRMedico = $_POST['crmMedico'];
$EspecialidadeMedico = $_POST['especialidaMedico'];

// inserido os dados digitados nas text box no banco de dados UBS
$db->exec("INSERT INTO medico (nome_medico, cpf_medico,	data_nasc_medico,	sexo_medico,	telefone_medico,	celular_medico,	email_medico,	rg_medico,	bairro_medico,	rua_medico,	numero_medico,	crm_medico,	especialidade_medico) VALUES ('$NomeMedico','$CpfMeico','$DataMedico', '$SexoMedico', '$TelefoneMedico', '$CelularMedico', '$EmailMedico', '$RGMedico' , '$BairroMedico', '$RuaMedico', '$NumeroMedico', '$CRMedico', '$EspecialidadeMedico')");
}
}

// FUNÇÃO PARA PESQUISAR MÉDICOS
function pesquisarMedico(){
		// string de conexão com o banco de dados
		$db = new PDO ("mysql:host=localhost;dbname=ubs", "root", "");
		if (isset($_POST["pesquisaMedico"])){
			$NomeMedico = $_POST['pesquisaMedico'];
			$dados = $db->query("select * from medico WHERE nome_medico = '$NomeMedico'"); // consulta ao banco 
			echo "$NomeMedico";
			while ($row = $dados->fetch()){
				echo <<<HTML
				<div>
				<table>
				<tr >
				<td WIDTH=100 > Nome </td>
				<td WIDTH=100 > CPF </td>
				<td WIDTH=100 > Data Nasc. </td>
				<td WIDTH=100 > Sexo </td>
				<td WIDTH=100 > Telefone </td>
				<td WIDTH=100 > Celular</td>
				<td WIDTH=100 > E-mail</td>
				<td WIDTH=100 > RG</td>
				<td WIDTH=100 > Bairro</td>
				<td WIDTH=100 > Rua</td>
				<td WIDTH=100 > N°</td>
				<td WIDTH=100 > CRM</td>
				<td WIDTH=100 > Especialidade</td>
			</tr>
				<tr>
				<td WIDTH=100>$row[0]</td>
				<td WIDTH=100>$row[1]</td>
				<td WIDTH=100>$row[2]</td>
				<td WIDTH=100>$row[3]</td>
				<td WIDTH=100>$row[4]</td>
				<td WIDTH=100>$row[5]</td>
				<td WIDTH=100>$row[6]</td>
				<td WIDTH=100>$row[7]</td>
				<td WIDTH=100>$row[8]</td>
				<td WIDTH=100>$row[9]</td>
				<td WIDTH=100>$row[10]</td>
				<td WIDTH=100>$row[11]</td>
				<td WIDTH=100>$row[12]</td>
				</tr>
				</table>
			</div>
HTML;
	}
	}
}

// FUNÇÃO DE EDIÇÃO DE DADOS DE MEDICOS JÁ CADASTRADOS
function editarMedico(){
	// string de conexão com o banco de dados
	$db = new PDO ("mysql:host=localhost;dbname=ubs", "root", "");

	// codigo de alteração dos dados de medicos no banco de dados
	if (isset($_POST["nomeMedico"])){	// esse if testa os endereços das caixas de texto
	$NomeMedico = $_POST['nomeMedico'];
	$CpfMedico = $_POST['cpfMedico'];
	$DataMedico = $_POST['dataMedico'];
	$SexoMedico = $_POST['sexoMedico'];
	$TelefoneMedico = $_POST['telefoneMedico'];
	$CelularMedico = $_POST['celularMedico'];
	$EmailMedico = $_POST['emailMedico'];
	$RGMedico = $_POST['rgMedico'];
	$BairroMedico = $_POST['bairroMedico'];
	$RuaMedico = $_POST['ruaMedico'];
	$NumeroMedico = $_POST['numeroMedico'];
	$CRMedico = $_POST['crmMedico'];
	$EspecialidadeMedico = $_POST['especialidaMedico'];
	$CPFMedicoAlter = $_POST['CPFMedicoAlterar']; // VARIAVEL QUE PEGA O VALOR DO CPFQUE SERÁ PESQUISADO

	// alterando  os dados digitados nas text box no banco de dados tabela MEDICO
	$db->exec("UPDATE medico SET nome_medico ='$NomeMedico',cpf_medico = '$CpfMedico',data_nasc_medico = '$DataMedico',sexo_medico ='$SexoMedico',telefone_medico = '$TelefoneMedico',celular_medico ='$CelularMedico', email_medico = '$EmailMedico',rg_medico ='$RGMedico', bairro_medico = '$BairroMedico',rua_medico = '$RuaMedico', numero_medico = '$NumeroMedico' ,crm_medico = '$CRMedico', especialidade_medico = '$EspecialidadeMedico' WHERE cpf_medico = '$CPFMedicoAlter'"); 

		tagDiv(true, "col-md-6");
		echo "Editado com Sucesso !";
		tagDiv(false, "col-md-6");
	
}

}

//FUNÇÃO DE PRINTAR A TABELA MEDICO COM TODOS OS DADOS CADASTRADOS
function printaBancoMedico(){
// string de conexão com o banco de dados
$db = new PDO ("mysql:host=localhost;dbname=ubs", "root", "");	

$dados = $db->query("select * from medico"); // consulta ao banco 

echo <<<HTML
				<table>
HTML;

echo <<<HTML
			<tr >
				<td WIDTH=100 > Nome </td>
				<td WIDTH=100 > CPF </td>
				<td WIDTH=100 > Data Nasc. </td>
				<td WIDTH=100 > Sexo </td>
				<td WIDTH=100 > Telefone </td>
				<td WIDTH=100 > Celular</td>
				<td WIDTH=100 > E-mail</td>
				<td WIDTH=100 > RG</td>
				<td WIDTH=100 > Bairro</td>
				<td WIDTH=100 > Rua</td>
				<td WIDTH=100 > N°</td>
				<td WIDTH=100 > CRM</td>
				<td WIDTH=100 > Especialidade</td>
			</tr>
HTML;

// percorrendo o banco
while ($row = $dados->fetch()){
	echo <<<HTML
		<tr>
				<td WIDTH=100 >$row[0]</td>
				<td WIDTH=100 >$row[1]</td>
				<td WIDTH=100 >$row[2]</td>
				<td WIDTH=100>$row[3]</td>
				<td WIDTH=100 >$row[4]</td>
				<td WIDTH=100>$row[5]</td>
				<td WIDTH=100 >$row[6]</td>
				<td WIDTH=100 >$row[7]</td>
				<td WIDTH=100 >$row[8]</td>
				<td WIDTH=100 >$row[9]</td>
				<td WIDTH=100 >$row[10]</td>
				<td WIDTH=100 >$row[11]</td>
				<td WIDTH=100 >$row[12]</td>
		</tr>
HTML;

	}
echo <<<HTML
		</table>
HTML;

}

//função de exclusão de MEDICO do bancode dados e do sistema
function excluirMedico(){
	$db = new PDO ("mysql:host=localhost;dbname=ubs", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if (isset($_POST["excluiMedico"])){
			$NomeMedico = $_POST['excluiMedico'];
			// sql to delete a record
    		$sql = "DELETE FROM medico WHERE nome_medico = '$NomeMedico'";

    		// use exec() because no results are returned
    		$db->exec($sql);
    		echo "Record deleted successfully";




			//$dados = $db->query("DELETE from ubs WHERE nome_ubs = '$NomeUbs'"); // consulta ao banco 
			//echo "$NomeUbs";
		}

	tagDiv(true, "col-md-6");
	echo " Médico Excluido do Sucesso !";
	tagDiv(false, "col-md-6");


}

//---------------------------------------------------------------------------------------------------------------------------------------
// --------------------------- PARTE DE BANCO EXAMES -------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------

// Função para cadastrar medicos
function inserirExame(){
// string de conexão com o banco de dados
$db = new PDO ("mysql:host=localhost;dbname=ubs", "root", "");	
// recuperando os dados vindos dos texts box por post
if (isset($_POST["nomeExame"])){	// esse if testa os endereços das caixas de texto
$NomeExame = $_POST['nomeExame'];
$TipoExame = $_POST['tipoExame'];
$EspecialidadeExame = $_POST['especialidadeExame'];
$CodigoExame = $_POST['codigoExame'];
$DescricaoExame = $_POST['descricaoExame'];
$NomeLaboratorio = $_POST['nomeLaboratorio'];


// inserido os dados digitados nas text box no banco de dados UBS
$db->exec("INSERT INTO exame (nome_exame, tipo_exame, especialidade_exame,	cod_exame,	descricao_exame,	nome_laboratorio) VALUES ('$NomeExame', '$TipoExame', '$EspecialidadeExame', '$CodigoExame', '$DescricaoExame', '$NomeLaboratorio')");
}
}

// FUNÇÃO PARA PESQUISAR EXAMES
function pesquisarExame(){
		// string de conexão com o banco de dados
		$db = new PDO ("mysql:host=localhost;dbname=ubs", "root", "");
		if (isset($_POST["pesquisaExame"])){
			$NomeExame = $_POST['pesquisaExame'];
			$dados = $db->query("select * from exame WHERE nome_exame = '$NomeExame'"); // consulta ao banco 
			echo "$NomeExame";
			while ($row = $dados->fetch()){
				echo <<<HTML
				<div>
				<table>
				<tr>
				<td WIDTH=100> Nome </td>
				<td WIDTH=100> Tipo  </td>
				<td WIDTH=100> Especialidade</td>
				<td WIDTH=100> Código </td>
				<td WIDTH=100> Descrição </td>
				<td WIDTH=100> Laboratório </td>
				</tr>

				<tr>
				<td WIDTH=100>$row[0]</td>
				<td WIDTH=100>$row[1]</td>
				<td WIDTH=100>$row[2]</td>
				<td WIDTH=100>$row[3]</td>
				<td WIDTH=100>$row[4]</td>
				<td WIDTH=100>$row[5]</td>
				</tr>
				</table>
			</div>
HTML;
	}
	}
}

//FUNÇÃO DE PRINTAR A TABELA EXAME COM TODOS OS DADOS CADASTRADOS
function printaBancoExame(){
// string de conexão com o banco de dados
$db = new PDO ("mysql:host=localhost;dbname=ubs", "root", "");	

$dados = $db->query("select * from exame"); // consulta ao banco 

echo <<<HTML
	<table>
HTML;

echo <<<HTML
	<tr>
	<td WIDTH=100> Nome </td>
	<td WIDTH=100> Tipo  </td>
	<td WIDTH=100> Especialidade</td>
	<td WIDTH=100> Código </td>
	<td WIDTH=100> Descrição </td>
	<td WIDTH=100> Laboratório </td>
	</tr>
HTML;
// percorrendo o banco
while ($row = $dados->fetch()){
	echo <<<HTML
		<table>
		<tr>
				<td WIDTH=100>$row[0]</td>
				<td WIDTH=100>$row[1]</td>
				<td WIDTH=100>$row[2]</td>
				<td WIDTH=100>$row[3]</td>
				<td WIDTH=100>$row[4]</td>
				<td WIDTH=100>$row[5]</td>
				
		</tr>
HTML;
	}
echo <<<HTML
	</table>
HTML;

}

// FUNÇÃO DE EDIÇÃO DOS DADOS DA TABELA EXAME
function editarExame(){
	// string de conexão com o banco de dados
	$db = new PDO ("mysql:host=localhost;dbname=ubs", "root", "");

	// codigo de alteração dos dados de medicos no banco de dados
	if (isset($_POST["nomeExame"])){	// esse if testa os endereços das caixas de texto
	$NomeExame = $_POST['nomeExame'];
	$TipoExame = $_POST['tipoExame'];
	$EspecialidadeExame = $_POST['especialidadeExame'];
	$CodigoExame = $_POST['codExame'];
	$DescricaoExame = $_POST['descricaoExame'];
	$NomeLaboratorio = $_POST['nomeLaboratorio'];
	
	$CodExameAlter = $_POST['codExameAlter']; // VARIAVEL QUE PEGA O VALOR DO CPFQUE SERÁ PESQUISADO

	// alterando  os dados digitados nas text box no banco de dados tabela MEDICO
	$db->exec("UPDATE exame SET nome_exame='$NomeExame', 
		tipo_exame='$TipoExame',
		especialidade_exame='$EspecialidadeExame',
		cod_exame='$CodigoExame', 
		descricao_exame='$DescricaoExame',
		nome_laboratorio='$NomeLaboratorio'
		WHERE cod_exame = '$CodExameAlter'"); 

		tagDiv(true, "col-md-6");
		echo "Editado com Sucesso !";
		tagDiv(false, "col-md-6");
	
}

}

// FUNÇÃO DE EXCLUSÃO DE EXAME DO BANCO DE DADOS E DO SISTEMA
function excluirExame(){
	$db = new PDO ("mysql:host=localhost;dbname=ubs", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if (isset($_POST["excluiExame"])){
			$NomeExame = $_POST['excluiExame'];
			// sql to delete a record
    		$sql = "DELETE FROM exame WHERE nome_exame = '$NomeExame'";

    		// use exec() because no results are returned
    		$db->exec($sql);
    		echo "Record deleted successfully";




			//$dados = $db->query("DELETE from ubs WHERE nome_ubs = '$NomeUbs'"); // consulta ao banco 
			//echo "$NomeUbs";
		}

	tagDiv(true, "col-md-6");
	echo " Exame Excluido do Sucesso !";
	tagDiv(false, "col-md-6");


}


?>



