
function ValidaTelefone(){
	var x = document.getElementById("telUBS").value;
	if (isNaN(x)) {
		alert(Não é Numero);
	} 
	else{
		document.getElementById("demo").innerHTML = x;
	}
	
}