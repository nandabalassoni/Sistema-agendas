<html>
	<head>
		<title> Cadastro de usuários - Sistema de agendas</title>
		<link rel="stylesheet" type="text/css" href="cadastro.css">
		<!-- <script src="js/function.js"></script> -->
		<meta charset="utf-8">
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
	<body>

		<em><h1> Sistema de agendas </h1></em>
		<br><br>
		<div class="corpo">
			<br>
			<em><h2> Cadastro de usuários </h2></em>
			<div>
				<br>
				<div class="formulario">
					<form action="./novo_cadastro.php" method="post" id="cadastro_usuario">
						<label> Login </label>
						<input type="email" name="usuario" placeholder="Informe email para login" required />
						<br><br>
						<label> Senha </label>
						<input type="password" name="Senha"placeholder="Informe uma senha" required />
						<br><br>
						<label> Digite novamente  </label>
						<input type="password" name="redigite" placeholder="Informe uma senha" required />
						<br><br>
						<input type="submit" name="Cadastrar">
						<input type="button" value="Voltar" onclick="funcaoVoltar()">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>