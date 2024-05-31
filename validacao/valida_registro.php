<?php

include_once('../conexao/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = $_POST['produto'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $validade = $_POST['validade'];

    $sql = "INSERT INTO products (nome, descricao, quantidade, validade) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssis", $produto, $descricao, $quantidade, $validade);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        
        echo '<script> window.alert("Item Cadastrado com Sucesso!"); setTimeout(function(){ window.location.href = "../pages/registar.php"; }); </script>';

    } else {
        $msg = 'Erro ao preparar a consulta SQL.';
    }
}
?>