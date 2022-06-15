<?php

require_once 'app/Classes/Produtos.Class.php';
$obProd = new Produto;


    if(isset($_POST['nome'],$_POST['descricao'],$_POST['marca'],$_POST['quantidade'])){
        $obProd->nome   = $_POST['nome'];
        $obProd->descricao       = $_POST['descricao'];
        $obProd->marca         = $_POST['marca'];
        $obProd->quantidade        = $_POST['quantidade'];
        $obProd->Cadastrar();

        header('location: dashboard.php?status=success');
        
    }

include_once('header.php');
include_once('form.php');
include_once('footer.php');