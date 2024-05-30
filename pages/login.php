<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../source/style/login.css">
    <title>Login - FarmaControl</title>
</head>
<body>
    <!-- BOLHAS BACKGROUND -->
    <div class="bubbles"></div>

    <!-- FORMULARIO DE CADASTRO -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        
        <div class="form-container">
            
            <h2 class="text-center mb-4">Login</h2>
            
            <form id="cadastroForm" action="../validacao/valida_login.php" method="post">

                <div class="mb-3">
                    <label for="username" class="form-label">Usuário</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Digite seu usuário" required>
                </div>
               
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
                </div>
                              
                <button type="submit" id="cadastroBtn" class="btn btn-primary w-100">Logar</button>
                
                <a href="cadastro.php" class="logado">Não possui uma conta? Cadastrar</a>

                <div id="error" class="error"></div>

            </form>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="../source/javascript/login.js"></script>
</body>
</html>