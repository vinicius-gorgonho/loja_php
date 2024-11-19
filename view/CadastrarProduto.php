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
   <div class="container">
      <form action="../controller/ProdutoController.php"
         method="POST">
         <input type="hidden" name="method" value="salvar" />
         <div class="mb-3">
            <input type="text" name="nome_produto"
               placeholder="nome" class="form-control" />
         </div>
         <div class="mb-3">
            <input type="text" name="categoria"
               placeholder="categoria" class="form-control" />
         </div>
         <div class="mb-3">
            <input type="text" name="preco"
               placeholder="Preço" class="form-control" />
         </div>
         <div class="d-grid gap-2 col-6 mx-auto">
            <input type="submit" value="Cadastrar" class="btn btn-primary" />
         </div>
      </form>
   </div>
</body>

</html>