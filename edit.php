<?php

	session_start();
	include 'viewtable.php';
	
?>
<html>
	<head>
		<title> Cadastro de contatos - Sistema de agenda </title>
		<link rel="stylesheet" type="text/css" href="cadastro.css">
		<meta charset="utf-8">
		<script>
			function funcaoVoltar() {
				var  msg;
				var r = confirm ("Você quer mesmo sair? Perderá toda a edição dos dados");
				if (r == true) {
				window.location.href="index.php";
				} else {
				window.location.href="";
				}
			}
		</script> 

	</head>
	<body>
		<nav>
			<div class="nav">
				<a href="index.php" onclick="funcaoVoltar()">Sair</a>
				<!-- <button><a href="index.php">Sair</a></button> -->
			</div>
		</nav>
		<em><h1> Sistema de agenda </h1></em> 
		    <br><br>
		    <div class="corpo">
				<br>
					<em><h2> Editar contato </h2></em>
					<?php

						$query_select="SELECT * FROM contato";
						$query_result=(mysqli_query($con, $query_select));

						// print_r($select_result);exit;

						if(mysqli_query($con, $query_select)) :
						foreach($query_result as $contato) :
					?>
					<div>
						<br>
						<div class="formulario">
							<form action="edit1.php" method="post" id="editar">
								<input type="hidden" name="idcontato" value="<?php echo ($contato['idcontato']); ?>">

								<label> Nome: </label>
								<input type="text" name="nome" placeholder="Seu nome" value="<?php echo ($contato['nome']); ?>">
								<br><br>
								<label> Endereço: </label>
								<input type="text" name="endereco" placeholder="Seu endereco" value="<?php echo ($contato['endereco']); ?>" >
								<br><br>
								<label> Telefone:</label>
								<input type="text" name="telefone" placeholder="Seu telefone" value="<?php echo ($contato['telefone']); ?>" >
								<br><br>
								<label> Email:</label>
								<input type="email" name="email" placeholder="Seu email" value="<?php echo ($contato['email']); ?>" >
								<br><br>
								<input type="submit" value="Salvar">
								<button><a href="exibe.php" onclick="funcaoVoltar()">Voltar para lista de contatos</a></button>
								<!-- <button><a href="delete.php"> Limpar dados </a></button> -->
							</form>
						<?php endforeach; ?>
						<?php endif; ?>
						</div>
					</div>
				</div>
	</body>	
</html>