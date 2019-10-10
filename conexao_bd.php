<?php

	$connect = mysqli_connect("localhost", "root", "rootroot", "sistema_agendas") or die ("Não foi possível conectar".mysqli_connect_error());


	$query = "INSERT INTO usuarios (login, senha) VALUES ('$_POST[login]', '$_POST[senha]')";

	// $add =

	if(mysqli_query($connect, $query)){

		echo"<script language='javascript' type='text/javascript'>alert('Bem-vindo!');window.location.href='cadastro.html';</script>";
	} else{
		echo"<script language='javascript' type='text/javascript'>alert('Não foi possível realizar login. Por favor, tente novamente.');window.location.href='login.php';</script>";
	}
	
	mysqli_close($connect);

?>