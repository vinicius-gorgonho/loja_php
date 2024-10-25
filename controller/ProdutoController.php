<?php
 // Identifica a requisição e o parâmetro na url
if($_SERVER['REQUEST_METHOD'] == 'GET' 
&& isset($_GET['method']) ){
$method = $_GET['method'];
// Verifica se no controlador tem a função chamada
if(method_exists('ProdutoController', $method)){
   // Cria o objeto do Controlador
   $produtoController = new ProdutoController();
   // Chama a função que foi selecionada
   $produtoController->$method($_GET);
}else{
    echo "Método não existe.";
}
}else if($_SERVER['REQUEST_METHOD'] == 'POST'
&& isset($_POST['method'])){
 // Recebe a requisição
 $method = $_POST['method'];
 if(method_exists('ProdutoController', $method)){
    // cria o objeto ProdutoController
    $produtoController = new ProdutoController();
    // chama o método solicitado
    $produtoController->$method($_POST);
 }else{
    echo "Método não existe";
 }
}
class ProdutoController{

    public function index(){

    }
    public function salvar(){
        echo "ACerteiiiiiiii ";
    }
}
?>