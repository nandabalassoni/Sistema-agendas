<?php
	session_start();
	include 'viewtable.php'; 

	$idcontato = $_POST['idcontato'];
	$nome= $_POST['nome'];
	$endereco= $_POST['endereco'];
	$telefone= $_POST['telefone'];
	$email= $_POST['email'];

	$update_query="UPDATE contato SET nome='$nome', endereco='$endereco', telefone='$telefone', email='$email' 
	WHERE idcontato='$idcontato'";
	$update_result= mysqli_query($con, $update_query);

	if($update_result)
		echo "<script> location.href='exibe.php?p=inicial'</script>";
	else
		echo "<script> alert('Não foi possível editar usuário. Por favor, tente novamente.');location.href='edit.php?p=inicial';
			</script>";
?>
