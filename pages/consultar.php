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
    <link rel="stylesheet" href="../source/style/consultar.css">
    <title>Consultar FarmaControl</title>
</head>

<body>

    <!-------------------------- CABECALHO -------------------------->

    <header class="navbar">
        <h1 class="logo">FarmaControl</h1>
        <span class="username"><?php echo htmlspecialchars($_SESSION["username"]); ?></span>
        <a href="../validacao/valida_logout.php" class="sair">Sair</a>
    </header>

    <!-------------------------- PUXAR TABELA -------------------------->
    <div class="container">
        <h2>Tabela de Produtos</h2>
        <div class="table-container"> <!-- Nova div para envolver a tabela -->
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Produto</th>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Validade</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include '../validacao/valida_consulta.php'; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-------------------------- FOOTER  -------------------------->
    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> FarmaControl. Todos os direitos reservados.</p>
    </footer>

    <script src="../source/javascript/consultar.php"></script>
</body>

</html>