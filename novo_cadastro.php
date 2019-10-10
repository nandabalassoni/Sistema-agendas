<?php

	// FAZENDO A LIGAÇÃO COM O BANCO DE DADOS. SE TIVER ALGUM ERRO DE CONEXÃO APARECE A MENSAGEM "NÃO FOI POSSÍVEL CONECTAR"
  
  	$connect = mysqli_connect("localhost", "root", "rootroot", "sistema_agendas") or die ("Não foi possível conectar".mysqli_connect_error());

  	// PEGANDO OS DADOS DO BANCO E FAZENDO A VALIDAÇÃO NECESSÁRIA

	$user = $_POST['usuario'];
	$senha = md5($_POST['Senha']);
	$redigite = md5($_POST['redigite']);

	if($senha!=$redigite){
		echo"<script language='javascript' type='text/javascript'>alert('Senhas não coincidem. Por favor, digite novamente!');window.location.href='new_user.php';</script>";
	} else{
		echo"<script language='javascript' type='text/javascript'>alert('Cadastro realizado! Realize o login!');window.location.href='login.php';</script>";
	}

	//INSERE DADOS NO BANCO E VALIDA SE FORAM INSERIDOS CORRETAMENTE

  	$cont="INSERT INTO new_user (usuario, Senha) VALUES ('$_POST[usuario]', '$_POST[Senha]')";

   	if(mysqli_query($connect, $cont)){
    echo "Dados inseridos";
  	} else {
    echo "Erro ao adicionar dados".mysqli_error($cont);
  	}

  // var_dump($cont);
  //exit;

	// ENCERRA A CONEXÃO COM O BANCO

  	mysqli_close($connect);

?> 

