<?php
session_start();

if (!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../source/style/registrar.css">
    <title> FarmaControl | Registrar </title>
</head>

<body>
    <!-------------------------- CABECALHO -------------------------->

    <header class="navbar">
        <h1 class="logo">FarmaControl</h1>
        <span class="username"><?php echo htmlspecialchars($_SESSION["username"]); ?></span>
        <a href="../validacao/valida_logout.php" class="sair">Sair</a>
    </header>

    <!-------------------------- FORMULARIO  -------------------------->
    <form id="formRegistro" action="../validacao/valida_registro.php" method="post">
        <div>
            <label for="produto">Produto:</label>
            <input type="text" id="produto" name="produto" required>
        </div>
        <div>
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" required>
        </div>
        <div>
            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" required>
        </div>
        <div>
            <label for="validade">Validade:</label>
            <input type="date" id="validade" name="validade" required>
        </div>
        <div>
            <input type="submit" value="Registrar">
        </div>


    </form>
    
    <!-------------------------- FOOTER  -------------------------->
    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> FarmaControl. Todos os direitos reservados.</p>
    </footer>


    <script src="../source/javascript/registrar.js"></script>
</body>

</html>