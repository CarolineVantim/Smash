<?php

session_start();
        /** Host para conexão com o Banco de Dados */
    $localhost = "localhost";
    $user = "root";
    $senha = "";
    $banco = "smash";
    global $pdo;

    try {
        $pdo = new PDO("mysql:dbname=" .$banco."; host=".$localhost, $user, $senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $retorno) {
        echo "ERRO: ".$retorno->getMessage();
        exit;
    }

    $sql = $pdo->query("SELECT * FROM funcionarios");
    $sql->execute();
    