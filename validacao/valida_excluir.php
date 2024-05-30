<?php
include_once('../conexao/conexao.php');

// Verifica se o parâmetro "id" foi enviado
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query para excluir o produto com o ID fornecido
    $sql = "DELETE FROM products WHERE id = $id";

    // Executa a query
    if ($conn->query($sql) === TRUE) {
        // Redireciona de volta para a página de consulta após a exclusão
        header("Location: ../pages/consultar.php");
        exit();
    } else {
        echo "Erro ao excluir o produto: " . $conn->error;
    }
} else {
    echo "ID do produto não fornecido.";
}
$conn->close();
?>
