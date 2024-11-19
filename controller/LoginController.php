<?php
 // Identifica a requisição e o parâmetro na url
namespace controller;

if($_SERVER['REQUEST_METHOD'] == 'GET' 
&& isset($_GET['method']) ){
$method = $_GET['method'];
// Verifica se no controlador tem a função chamada
if(method_exists('controller\LoginController', $method)){
   // Cria o objeto do Controlador
   $loginController = new LoginController();
   // Chama a função que foi selecionada
   $loginController->$method($_GET);
}else{
    echo "Método não existe.";
}
}else if($_SERVER['REQUEST_METHOD'] == 'POST'
&& isset($_POST['method'])){
 // Recebe a requisição
 $method = $_POST['method'];
 if(method_exists('controller\LoginController', $method)){
    // cria o objeto ProdutoController
    $loginController = new LoginController();
    // chama o método solicitado
    $loginController->$method($_POST);
 }else{
    echo "Método não existe";
 }
}
class LoginController{

    public function efetuarLogin(){
        header('location: ../view/ListarProduto.php');
    }

}
?>