<?php
namespace model;
require "Conexao.php";

use model\Conexao;
class ProdutoDAO{
   public function salvar($produto){
     // 1 -  Cria o objeto de Conexão
     $conexao = new Conexao();
    // 2 -  Recuperar um conexão com o banco
    $conn = $conexao->getConnection();
    // 3 - Montar o SQL
    $INSERT  = "INSERT INTO produto(nome, categoria, valor) VALUES (:nome, :categoria, :valor)";
    // 4- Cria a Consulta (statement)
    $stmt = $conn->prepare( $INSERT );
   // 5 - Preencher os dados do Usuário
    $nome = $produto->getNome();
    $categoria = $produto->getCategoria();
    $valor = $produto->getValor();
    // 6 Associa os parâmetros
    $stmt->bindParam(':nome', $nome );
    $stmt->bindParam(':categoria', $categoria );
    $stmt->bindParam(':valor', $valor);
    // 7 - REaliza Consulta
    $stmt->execute();
    return "Produto Salvo com sucesso";
   }
}
?>