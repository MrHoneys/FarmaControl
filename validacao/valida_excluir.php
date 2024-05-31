<?php

include_once('../conexao/conexao.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM products WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
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
