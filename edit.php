<?php

require_once('app/Classes/Produtos.Class.php');
//VALIDAÇÃO DO ID
if(!isset($_GET['id_produto']) or !is_numeric($_GET['id_produto'])){
  header('location: dashboard.php?status=error');
  exit;
}

//CONSULTA A Produto
$obProd = Produto::getProduto($_GET['id_produto']);

//VALIDAÇÃO DA Produto
if(!$obProd instanceof Produto){
  header('location: dashboard.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['marca'],$_POST['quantidade'],$_POST['descricao'])){
  $obProd->nome   = $_POST['nome'];
  $obProd->descricao       = $_POST['descricao'];
  $obProd->marca         = $_POST['marca'];
  $obProd->quantidade        = $_POST['quantidade'];
  $obProd->Atualizar();


  header('location: dashboard.php?status=success');
  exit;
}


require_once('header.php');
require_once('form.php');
require_once('footer.php');

?>