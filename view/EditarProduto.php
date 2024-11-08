<?php
   session_start();
   $produto = $_SESSION['produto'];
?>
<html>
    <body>
 <a href="../controller/ProdutoController.php?method=salvar"> 
    Testar Controlador 
 </a>
 <h1>Editar Produto</h1>
 <form action="../controller/ProdutoController.php"
  method="POST">
<input type="hidden" name="method" value="salvar" />
<input type="text" name="nome_produto" 
value="<?= $produto['nome'] ?>" />
<input type="text" name="categoria" 
 value="<?= $produto['categoria'] ?> />
<input type="text" name="preco"  
value="<?= $produto['preco'] ?> />
<input type="submit" value="Enviar" />
 </form>
    </body>
</html>