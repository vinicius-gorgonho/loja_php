<?php
namespace model;
require "Conexao.php";

use model\Conexao;
use PDOException;

class ProdutoDAO{
   public function salvar($produto){
     // 1 -  Cria o objeto de Conexão
     $conexao = new Conexao();
    // 2 -  Recuperar um conexão com o banco
    $conn = $conexao->getConnection();
    // 3 - Montar o SQL
    $INSERT  = "INSERT INTO produtos(nome, categoria, preco) VALUES (:nome, :categoria, :preco)";
    // 4- Cria a Consulta (statement)
    $stmt = $conn->prepare( $INSERT );
   // 5 - Preencher os dados do Usuário
    $nome = $produto->getNome();
    $categoria = $produto->getCategoria();
    $valor = $produto->getPreco();
    // 6 Associa os parâmetros
    $stmt->bindParam(':nome', $nome );
    $stmt->bindParam(':categoria', $categoria );
    $stmt->bindParam(':preco', $preco);
    // 7 - REaliza Consulta
    $stmt->execute();
    return "Produto Salvo com sucesso";
   }
  
   public function getTodos(){
      // 1 - instancia
      $conexao = new Conexao();
      // 2 - Recupera
      $connection = $conexao->getConnection();
      // 3 - SQL
      $SQL = 'Select * from produtos';
      // 4 - realiza a consulta
      $resultado = $connection->query($SQL);
      $produtos = []; // inicializa a resposta
      while($linha = $resultado->fetch()){
$produto = new Produto();
$produto->setCodigo($linha['codigo']);
$produto->setNome($linha['nome']);
$produto->setCategoria($linha['categoria']);
$produto->setPreco($linha['preco']);
array_push($produtos, $produto);
      }
      return $produtos;
   }
   public function getPorCodigo($codigo){
try{
   $conexao = new Conexao();
   $connection = $conexao->getConnection();
$SQL = "SELECT * FROM produtos 
WHERE codigo = :codigo";
$stmt = $connection->prepare($SQL);
$stmt->bindParam(':codigo', $codigo);
$stmt->execute();
$resultado = $stmt->fetch();
return $resultado;
}catch(PDOException $error){
   return $error->getMessage();
}
   }
}
?>