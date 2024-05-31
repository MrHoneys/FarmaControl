<?php
session_start();

if (!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true) {
    header("location: login.php");
    exit;
}

include_once('../validacao/valida_dados.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../source/style/editar.css">k
    <title>Editar FarmaControl</title>
</head>

<body>

    <!-------------------------- CABECALHO -------------------------->

    <header class="navbar">
        <h1 class="logo">FarmaControl</h1>
        <span class="username"><?php echo htmlspecialchars($_SESSION["username"]); ?></span>
        <a href="../validacao/valida_logout.php" class="sair">Sair</a>
    </header>

    <form action="../validacao/valida_editar.php" method="post">
        <div>
            <label for="produto">Produto:</label>
            <input type="text" id="produto" name="produto" value="<?php echo $produto; ?>" required>
        </div>
        <div>
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" value="<?php echo $descricao; ?>" required>
        </div>
        <div>
            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" value="<?php echo $quantidade; ?>" required>
        </div>
        <div>
            <label for="validade">Validade:</label>
            <input type="date" id="validade" name="validade" value="<?php echo $validade; ?>" required>
        </div>
        <input type="hidden" name="id" value="<?php echo $id_produto; ?>">
        <div>
            <input type="submit" value="Atualizar">
        </div>
    </form>

    <!-------------------------- FOOTER  -------------------------->
    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> FarmaControl. Todos os direitos reservados.</p>
    </footer>

</body>

</html>