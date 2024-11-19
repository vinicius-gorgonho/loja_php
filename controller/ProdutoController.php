<?php
 // Identifica a requisição e o parâmetro na url
namespace controller;
require '..\model\Produto.php';
require '..\model\ProdutoDAO.php';

use model\Produto;
use model\ProdutoDAO;

if($_SERVER['REQUEST_METHOD'] == 'GET' 
&& isset($_GET['method']) ){
$method = $_GET['method'];
// Verifica se no controlador tem a função chamada
if(method_exists('controller\ProdutoController', $method)){
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
 if(method_exists('controller\ProdutoController', $method)){
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
        $nome = filter_input(INPUT_POST, "nome_produto");
        $categoria = filter_input(INPUT_POST, "categoria");
        $preco = filter_input(INPUT_POST, "preco");

        $produto = new Produto();
        $produto->setNome($nome);
        $produto->setCategoria($categoria);
        $produto->setPreco($preco);

        $produtoDAO = new ProdutoDAO();
        $msg = $produtoDAO->salvar($produto);
        $_SESSION['msg'] = $msg;
        header('location: ../view/ListarProduto.php');
    }
    public function getTodos(){
        unset($_SESSION['msg']);
        $produtoDAO = new ProdutoDAO();
        return $produtoDAO->getTodos();
    }
public function iniciarEditar(){
  $codigo = filter_input(INPUT_GET, "codigo");
  $produtoDAO = new ProdutoDAO();
  $produto = $produtoDAO->getPorCodigo($codigo);
  session_start();
  $_SESSION['produto'] = $produto;
  header('location: ../view/EditarProduto.php');
    }
    public function atualizar(){
$codigo = filter_input(INPUT_POST, "codigo");
$nome = filter_input(INPUT_POST, "nome_produto");
$categoria = filter_input(INPUT_POST, "categoria");
$preco = filter_input(INPUT_POST, "preco");

    $produto = new Produto();
    $produto->setCodigo($codigo);
    $produto->setNome($nome);
    $produto->setCategoria($categoria);
    $produto->setPreco($preco);

    $produtoDAO = new ProdutoDAO();
    $msg = $produtoDAO->atualizar($produto);
    session_start();
    $_SESSION['msg'] = $msg;
    header('location: ../view/ListarProduto.php');
    }

    public function excluir(){     
        session_start();    
        $codigo = filter_input(INPUT_GET, "codigo");
        $produtoDAO = new ProdutoDAO();

        $produto = new Produto();
        $produto->setCodigo($codigo);
        $msg = $produtoDAO->excluir($produto);
        $_SESSION['msg'] = $msg;
        header('location: ../view/ListarProduto.php');
    }
}
?>