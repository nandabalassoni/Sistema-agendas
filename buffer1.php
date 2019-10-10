<?php

include ("./contatos.php");
// include 'novo_contato.php';

	session_start();

// VERIFICA SE O VETOR FOI CRIADO. SE NÃO FOR, ELE CRIA E INSERE OS DADOS NELE

	if(!isset($_SESSION['contato'])){
     	$_SESSION['contato'] = array();
    }

    $contato = new Contato($_POST['nome'],$_POST['endereco'] ,$_POST['telefone'], $_POST['email'] );
    // $login = new Login($_POST['login'], $_POST['senha']);

    array_push($_SESSION['contato'], json_encode($contato));

    // $connect = mysqli_connect("localhost", "root", "rootroot", "sistema_agendas") or die ("Não foi possível conectar".mysqli_connect_error());

    // $cont="INSERT INTO contato (nome, endereco, telefone, email) VALUES ('$_POST[nome]', '$_POST[endereco]', '$_POST[telefone]', '$_POST[email]')";

    header('Location: ./cadastro.html');

?>