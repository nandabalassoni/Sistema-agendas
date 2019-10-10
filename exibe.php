<?php
	session_start();
	include 'viewtable.php';
?>
<html>
	<head>
		<title> Sistema de Agendas </title>
		<link rel="stylesheet" type="text/css" href="./cadastro.css">
		<script>
		function funcaoExcluir() {
			var  msg;
			var r = confirm ("Você quer mesmo excluir esse contato?");
			if (r == true) {
			window.location.href="exibe.php";
			} else {
			window.location.href="";
			}
		}
		</script>
		<script>
			function funcaoVoltar() {
				var  msg;
				var r = confirm ("Você quer mesmo sair?");
				if (r == true) {
				window.location.href="index.php";
				} else {
				window.location.href="";
				}
			}
		</script>  
	</head>
	<meta charset="utf-8">
	<body>
		<nav>
			<div class="nav">
				<a href="index.php" onclick="funcaoVoltar()">Sair</a>
				<!-- <button><a href="index.php">Sair</a></button> -->
			</div>
		</nav>
		<em><h1> Sistema de agenda </h1></em>
		<div class="corpo">
			<br>
			<em><h2> Contatos cadastrados </h2></em>		
				<table class="table" border="1"> 
					<tr>
						<th> IdContato </th>
						<th> Nome </th>
						<th> Endereço </th>
						<th> Telefone </th>
						<th> Email </th>
						<th> Ação </th>
					</tr>
					<tbody>

						<?php
							$select_query="SELECT * FROM contato";
							$select_result=(mysqli_query($con, $select_query));

							// print_r($select_result);exit;

							if(mysqli_query($con, $select_query)) {
								foreach($select_result as $contato) : ?>

 								
								<tr>
									<td><?php echo($contato['idcontato']); ?></td>
									<td><?php echo($contato['nome']); ?></td>
									<td><?php echo($contato['endereco']); ?></td>				
									<td><?php echo($contato['telefone']); ?></td>
									<td><?php echo($contato['email']); ?></td>
									<td><a href="delete.php?idcontato=<?php echo $contato['idcontato']; ?>" onclick="funcaoExcluir()">Excluir</a>
										<a href="edit.php?idcontato=<?php echo $contato['idcontato']; ?>">Editar</a></td>
								</tr>	
								<?php endforeach; ?>				
						<?php } ?>
					</tbody>
				</table>
				<br>
				<div class="bt">
					<button><a href="./cadastro.html"> Cadastrar novo contato </a></button>
				</div>
		</div>
		<br>
	</body>
</html>