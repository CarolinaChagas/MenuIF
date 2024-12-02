<?php

    session_start(); 
    require_once ('class/controllers/Usuario_Controller.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $usuarioAdmin = Usuario_Controller::getAdministrador();

        if ($usuarioAdmin) {
            // email: admin@gmail.com    senha: fINdZ2IIV6B6rN1
            if ($usuarioAdmin->Email === $email && $usuarioAdmin->Senha === $senha) {
                $_SESSION['usuario'] = $usuarioAdmin;
                header('Location: admin/admin.php');
                exit;
            } 
                    
            else {
                $erro = 'Email ou senha inválidos!';
            }
        } 
                
        else {
            $erro = 'Usuário administrador não encontrado!';
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/menu_if.png" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <h1>Entrar</h1>
        <form id="loginForm" action="login.php" method = "POST">
            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
            </div>
            <div class="input-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                <span id="togglePassword" class="show-password">👁️</span>
                
            </div>
            <button type="submit">Entrar</button>
            <div class="error" id="error">
                <?php if(isset($erro)) echo $erro;?>
            </div>
        </form>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const senhaInput = document.getElementById('senha');
        
        togglePassword.addEventListener('click', function() {
            const type = senhaInput.type === 'password' ? 'text' : 'password';
            senhaInput.type = type;
        });
    </script>
</body>
</html>