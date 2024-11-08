<?php
require '../controller/ProdutoController.php';
use controller\ProdutoController;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  </head>
  <body>
    <table class="table">
      <tr>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Preço</th>
        <th colspan="2">Ações</th>
      </tr>
    <?php  
     $produtoController = new ProdutoController();
     $produtos = $produtoController->getTodos();
     foreach($produtos as $produto){
    ?>
    <tr><td> <?= $produto->getNome() ?> </td>
        <td> <?= $produto->getCategoria() ?> </td>
        <td> <?= $produto->getPreco() ?> </td>
<td><a href="../controller/ProdutoController.php?method=iniciarEditar
&codigo=<?= $produto->getCodigo() ?>"> 
  Editar </a> </td>
<td> <a href="#"> Excluir </a> </td>
    </tr>
    <?php } ?>
    </table>
  </body>
</html>