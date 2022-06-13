<?php

require_once 'db/Database2.php';

class Produto{


    public $id_produto;
    public $nome;
    public $marca;
    public $quantidade;
    public $descricao;

        public function Cadastrar() {

            $obDatabase = new Database('produtos');
            $this->id_produto = $obDatabase->insert([
                                            'nome'      => $this->nome,
                                            'descricao'  => $this->descricao,
                                            'quantidade'    => $this->quantidade,
                                            'marca'   => $this->marca
                                            ]);

            return true;
        }
        
        public function Atualizar(){
            return (new Database('produtos'))->update('id_produto = '.$this->id_produto,[
                                                                        'nome'      => $this->nome,
                                                                        'descricao'  => $this->descricao,
                                                                        'quantidade'    => $this->quantidade,
                                                                        'marca'   => $this->marca
                                                                      ]);
          }

        public function Excluir(){
            return (new Database('produtos'))->delete('id_produto = '.$this->id_produto);
          }
        
        public static function getProdutos($where = null, $order = null, $limit = null){
            return (new Database('produtos'))->select($where,$order,$limit)
                                          ->fetchAll(PDO::FETCH_CLASS,self::class);
          }

        public static function getProduto($id_produto){
            return (new Database('produtos'))->select('id_produto = '.$id_produto)
                                          ->fetchObject(self::class);
          }
        

    }
    