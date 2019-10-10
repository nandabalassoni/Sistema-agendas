<?php
	// session_start();
?>

<html>
	<head>
		<title> Login - Sistema de agenda </title>
		<link rel="stylesheet" type="text/css" href="cadastro.css">
		<meta charset="utf-8">
	</head>
	<body>
		<em><h1> Sistema de agendas </h1></em>
		<br><br>
		<div class="corpo">
			<br>
			<em><h2> Login Usuários </h2></em>
			<div>
				<br>
				<div class="formulario">
					<form action="conexao_bd.php" method="post">
						<label> Login: </label>
							<input type="email" name="login" placeholder="Seu login" required />
							<br><br>
							<label> Senha: </label>
							<input type="password" name="senha" placeholder="Sua senha" required />
							<br><br>
							<input type="submit" value="Logar" onClick="msg()">
							<p><a href="new_user.php" name="Novo usuario"> Não tem um cadastro? Faça o seu agora </a></p>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>