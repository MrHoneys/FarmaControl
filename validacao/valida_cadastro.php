<?php
    include_once('../conexao/conexao.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (usuario, senha) VALUES (?, ?)";

        // Preparar a instrução SQL
        $stmt = $conn->prepare($sql);

        // "ss" indica que os parâmetros são strings
        $stmt->bind_param("ss", $username, $password);

        // Executar a instrução SQL
        $stmt->execute();

        // Fechar a declaração
        $stmt->close();
        
        // Fechar a conexão com o banco de dados (se necessário)
        $conn->close();

        // Redirecionar para outra página após o cadastro
        header("Location: ../pages/login.php");
        exit(); 
    }
?>
