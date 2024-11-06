<html>
    <body>
 <a href="../controller/ProdutoController.php?method=salvar"> 
    Testar Controlador 
 </a>
 <form action="../controller/ProdutoController.php"
  method="POST">
<input type="hidden" name="method" value="salvar" />
<input type="text" name="nome_produto"
 placeholder="nome"/>
<input type="text" name="categoria" 
 placeholder="categoria"/>
<input type="text" name="preco"  
placeholder="Preço"/>
<input type="submit" value="Enviar" />
 </form>
    </body>
</html>