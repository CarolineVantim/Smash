<?php

  if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    
    require '../db/Conexao.php';
    require 'Classes/Funcionario.Class.php';

    $valida = new Funcionario();
    
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

     if($valida->login($email, $senha) == true){
       if(isset($_SESSION['id'])){
        header("Location: ../dashboard.php");
       }else{
        header("Location: ../home.php");
        echo("Email ou senha inválidos!");
       }

     }else{
       header("Location: home.php");
     }

  }else{
    header("Location: home.php");
  }