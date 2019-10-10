<?php
   	 class Contato implements JsonSerializable {
            private $nome;
            private $endereco;
            private $telefone;
            private $email;

            public function __construct ($nome , $endereco , $telefone = "", $email = "") {
                $this->setNome($nome);
            	$this->setEndereco($endereco);
            	$this->setTelefone($telefone);
            	$this->setEmail($email);
            }

             public function setNome ($nome) {
            	$this->nome = $nome;
            }

            public function getNome (){
            	return $this->nome . ' legal';
            } 

            public function setEndereco ($endereco){
            	$this->endereco = $endereco;
            }

            public function getEndereco (){
            	return $this->endereco;
            }

            public function setTelefone ($telefone){
            	$this->telefone = $telefone;
            }

            public function getTelefone (){
            	return $this->telefone;
            }

            public function setEmail ($email){
            	$this->email = $email;
            }

            public function getEmail (){
            	return $this->email;
            }

            public function jsonSerialize() {
               return get_object_vars($this);
            }


   	 }

   
   // echo $contato->telefone;
   	 // var_dump($contato);
   	  // print_r($nome);
?> 
