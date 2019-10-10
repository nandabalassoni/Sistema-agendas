<?php

	include 'viewtable.php';

	$idcontato = $_GET['idcontato'];

	$delete_query="DELETE FROM contato WHERE idcontato ='$idcontato'";

	$result_delete=(mysqli_query($con, $delete_query));

	if($result_delete)
		echo "<script> location.href='exibe.php?p=inicial'</script>";
	else
		echo "<script> alert('Não foi possível deletar usuário.');location.href='exibe.php?p=inicial';
			</script>";

?>