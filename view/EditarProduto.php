<?php
session_start();
$produto = $_SESSION['produto'];
?>
<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Listar Produto</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>


<body>
   <?php
   include __DIR__ . '\menu.php';
   ?>
   <h1>Editar Produto</h1>
   <form action="../controller/ProdutoController.php"
      method="POST">
      <input type="hidden" name="method" value="atualizar" />
      <input type="text" name="nome_produto"
         value="<?= $produto['nome'] ?>" class="form-control" />
      <input type="text" name="categoria"
         value="<?= $produto['categoria'] ?>" class="form-control" />
      <input type="text" name="preco"
         value="<?= $produto['preco'] ?>" class="form-control" />
      <input type="hidden" name="codigo"
         value="<?= $produto['codigo'] ?>" />
      <div class="d-grid gap-2 col-6 mx-auto">
         <input type="submit" value="Editar" class="btn btn-primary" />
      </div>
   </form>
</body>

</html>