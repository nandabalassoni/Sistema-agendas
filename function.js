function funcaoVoltar() {
	var  msg;
	var r = confirm ("Você quer mesmo sair?");
	if (r == true) {
	window.location.href="index.php";
	} else {
	window.location.href="";
	}
}