<?php

class Produto {

  public function Cadastrar(){
    
    $obDatabase = new Database('produtos');
    $this->id = $obDatabase->insert([
                                    'nome'      => $this->nome,
                                    'descricao'  => $this->descricao,
                                    'quantidade'    => $this->quantidade,
                                    'marca'   => $this->marca,
                                    ]);

    return true;
  }
}