<?php
session_start();

if (!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true) {
    header("location: ./pages/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="source/style/index.css">
    <title>FarmaControl</title>
</head>

<body>
    <!-- BOLHAS BACKGROUND -->
    <div class="bubbles"></div>
    
    <!-- BOAS VINDAS AO SISTEMA -->
    <div class="welcome-container">
        <h1 class="title">Bem-vindo ao FarmaControl <span class="username"><?php echo htmlspecialchars($_SESSION["username"]); ?></span></h1>
        <div class="actions">
            <a href="./pages/registar.php" class="action-button register-button">Registrar</a>
            <a href="./pages/consultar.php" class="action-button consult-button">Consultar</a>
            <a href="./validacao/valida_logout.php" class="action-button logout-button">Sair</a>
        </div>
    </div>

    <script src="source/javascript/index.js"></script>
</body>

</html>