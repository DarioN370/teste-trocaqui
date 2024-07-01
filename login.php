<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/cadastro-usuario.css">
</head>
<body>
    <div class="container">
        <h2>Login teu</h2>
        <form class="container-form" action="processa-cadastro.php" method="POST">
            <div class="container-inputs">
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input class="txt-area" type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input class="txt-area" type="password" id="senha" name="senha" required>
                </div>
            </div>
            
            <div class="btn-container">
                <div class="form-group">
                    <button class="btn-login" type="submit">Entrar</button>
                </div>

                <div class="form-group">
                    <a href="index.php"><button class="btn-voltar" type="button">Voltar</button></a>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>