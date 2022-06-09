<?php

    class Funcionario{

        public function Login($email, $senha){
            global $pdo;

            $sql = "SELECT * FROM funcionarios WHERE email = :email AND senha = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->bindValue("senha", md5($senha));
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();

                $_SESSION['id'] = $dado['id_funcionario'];

                return true;
            }else{
                return false;            
            }
        }

        public function Consultar(){

            $sql = "SELECT * FROM funcionarios";
            $sql = $pdo->prepare($sql);
        }

        public function Alterar(){

        }

        public function Cadastrar(){

        }

    }