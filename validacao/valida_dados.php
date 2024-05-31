<?php

include_once('../conexao/conexao.php');

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id_produto = $_GET["id"];

    $sql = "SELECT nome, descricao, quantidade, validade FROM products WHERE id = $id_produto";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        $produto = $row["nome"];
        $descricao = $row["descricao"];
        $quantidade = $row["quantidade"];
        $validade = $row["validade"];
    } else {
        header("location: ../pages/consultar.php");
        exit;
    }

    $conn->close();
} else {

    header("location: ../pages/consultar.php");
    exit;
}
?>
