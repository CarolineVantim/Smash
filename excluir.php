<?php

require_once('Produtos.Class.php');

//VALIDAÇÃO DO ID
if(!isset($_GET['id_produto']) or !is_numeric($_GET['id_produto'])){
  header('location: dashboard.php?status=error');
  exit;
}

//CONSULTA AO Produto
$obProd = Produto::getProduto($_GET['id_produto']);

//VALIDAÇÃO DA Produto
if(!$obProd instanceof Produto){
  header('location: dashboard.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])){

  $obProd->Excluir();

  header('location: dashboard.php?status=success');
  exit;
}

require_once('header.php');
require_once('confirma-exclusao.php');
require_once('footer.php');