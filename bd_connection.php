<?php

	$bd = mysqli_connect("localhost", "root", "rootroot", "bd.scg") or die ("Não foi possível conectar".mysqli_connect_error());

	$connect = "INSERT INTO bd_scg (user, senha) VALUES ('$_POST[user]', '$_POST[senha]')";

	if(mysqli_query($connect, $bd)){
		echo "Dados inseridos";
	} else{
		echo "Erro ao adicionar dados";
	}

	mysqli_close($connect);


?>