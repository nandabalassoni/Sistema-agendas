<?php

// FAZENDO A LIGAÇÃO COM O BANCO DE DADOS. SE TIVER ALGUM ERRO DE CONEXÃO APARECE A MENSAGEM "NÃO FOI POSSÍVEL CONECTAR"
  
  $connect = mysqli_connect("localhost", "user", "password", "databasename") or die ("Não foi possível conectar".mysqli_connect_error());

//INSERE DADOS NO BANCO E VALIDA SE FORAM INSERIDOS CORRETAMENTE

  $cont="INSERT INTO contato (nome, endereco, telefone, email) VALUES ('$_POST[nome]', '$_POST[endereco]', '$_POST[telefone]', '$_POST[email]')";

   if(mysqli_query($connect, $cont)){
    echo "Dados inseridos";
  } else {
    echo "Erro ao adicionar dados".mysqli_error($cont);
  }

  // var_dump($cont);
  //exit;

// ENCERRA A CONEXÃO COM O BANCO

  mysqli_close($connect);

  header('Location: ./cadastro.html');
?>
