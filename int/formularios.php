<?php
// CRIAR FORMULARIOS COM FRAMWORK 

// FUNÇÃO QUE ABRE FORMULARIOS
function formulario ($abrir, $acao, $nomeForm) {
	
	if ($abrir == true)
	{
		echo <<<HTML
		<form action="$acao" method="post" name="$nomeForm" class="EstiloFormulario">
HTML;
}
	else
	{
		echo "</form>";
	}
}
	
// FUNÇÃO DE FILDESTE 
function contornoFormulario ($abrir) {
	
	if ($abrir == true)
	{
		echo <<<HTML
		<fieldset>
HTML;
}
	else
	{
		echo "</fieldset>";
	}
}
	
// FUNÇÃO PARA CRIAR TEXT BOX
function caixaTexto($textoLable, $tipo, $nomeCaixa, $info, $id){
	echo <<<HTML
		</br>$textoLable:<br>
		<input type="$tipo" name="$nomeCaixa" placeholder="$info" id="$id"></br>
HTML;
}

// FUNÃO DE BOTÃO
function botao($tipoBotao, $textoBotao, $nomeBotao, $acaoBotao){
	echo <<<HTML
	<button type="$tipoBotao" name="$nomeBotao" onclick=" return $acaoBotao" class="EstiloBotao"> $textoBotao </button>
HTML;
}

// Função de formulario de login
function formLogin($abrir, $acao){
	if ($abrir == true)
	{
		echo <<<HTML
		<form action="$acao" method="post">
HTML;
}
	else
	{
		echo "</form>";
	}
	
	
}

// fuñção que cria um select
function seleciona($abrir, $nomeSeleciona, $textoSeleciona){
	if($abrir == true)
	{
		echo <<<HTML
		</br>$textoSeleciona :
		<select name="$nomeSeleciona" class="EstiloSelect">
HTML;
	}
	else
		echo "</select> </br>";

}
// Função que cria uma opção dentro de um select
function opcao($abrir, $textoOpcao,  $nomeOpcao){
	if($abrir == true)
	{
		echo <<<HTML
		<option value="$nomeOpcao"> $textoOpcao
HTML;
	}
	else
		echo "</option>";

}


?>