<?php

include_once('Produtos.Class.php');

$produtos = Produto::getProdutos();

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }
  $resultados = '';
  foreach($produtos as $produto){
    $resultados .= '<tr>
                      <td>'.$produto->nome.'</td>
                      <td>'.$produto->marca.'</td>
                      <td>'.$produto->quantidade.'</td>
                      <td>
                        <a href="editar.php?id_produto='.$produto->id_produto.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?id_produto='.$produto->id_produto.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhum produto encontrado
                                                       </td>
                                                    </tr>';

?>
<main>

  <?=$mensagem?>

  <div class="text-end">
        <button type="button" class="btn btn-dark btn-sm"> + Produto</button>
  </div>

  <section>

    <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Marca</th>
            <th>Quantidade</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>


</main>