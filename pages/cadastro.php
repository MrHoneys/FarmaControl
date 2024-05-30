<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../source/style/cadastro.css">
    <title>Cadastro - FarmaControl</title>
</head>
<body>
    <!-- BOLHAS BACKGROUND -->
    <div class="bubbles"></div>

    <!-- FORMULARIO DE CADASTRO -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        
        <div class="form-container">
            
            <h2 class="text-center mb-4">Área Cadastro</h2>
            
            <form id="cadastroForm" action="../validacao/valida_cadastro.php" method="post">

                <div class="mb-3">
                    <label for="username" class="form-label">Usuário</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Digite seu usuário" required>
                </div>
               
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
                </div>
               
                <div class="mb-3">
                    <label for="confirm-password" class="form-label">Repetir Senha</label>
                    <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Repita sua senha" required>
                </div>

                <button type="submit" id="cadastroBtn" class="btn btn-primary w-100">Cadastrar</button>
                
                <a href="login.php" class="logado">Já possui uma conta? Acessar !</a>

                <div id="igual" class="igual"></div>

            </form>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="../source/javascript/cadastro.js"></script>
</body>
</html>