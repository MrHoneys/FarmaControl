<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('../conexao/conexao.php');

    $produto = $_POST["produto"];
    $descricao = $_POST["descricao"];
    $quantidade = $_POST["quantidade"];
    $validade = $_POST["validade"];
    $id = $_POST["id"]; 

    $sql = "UPDATE products SET nome = ?, descricao = ?, quantidade = ?, validade = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisi", $produto, $descricao, $quantidade, $validade, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("location: ../pages/consultar.php");
    } else {
        echo "Erro ao atualizar o produto.";
    }

    $stmt->close();
    $conn->close();
} else {
    header("location: ../pages/editar.php");
    exit;
}
?>
