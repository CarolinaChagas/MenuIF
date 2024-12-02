<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/menu_if.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sugestoes.css">
    <title>Sugestões</title>
</head>

<body>
    <?php include 'header_footer/header.php';?>

    <div class="suggestion-container">
        <h3>Envie sua Sugestão</h3>
        <form id="suggestionForm">
            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
            </div>
            <div class="input-group">
                <label for="suggestion">Sua Sugestão</label>
                <textarea id="suggestion" name="suggestion" placeholder="Escreva suas sugestões aqui" required></textarea>
            </div>
            <button type="submit">Enviar Sugestão</button>
            <div class="error" id="error"></div>
            <div class="success" id="success"></div>
        </form>
    </div>

    <script>
        const form = document.getElementById('suggestionForm');
        const errorDiv = document.getElementById('error');
        const successDiv = document.getElementById('success');

        form.addEventListener('submit', (e) => {
            e.preventDefault(); // Previne o envio do formulário para validação

            const email = form.email.value.trim();
            const suggestion = form.suggestion.value.trim();

            // Resetando as mensagens de erro e sucesso
            errorDiv.textContent = '';
            successDiv.textContent = '';

            // Validação do e-mail
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!email.match(emailPattern)) {
                errorDiv.textContent = 'Por favor, insira um e-mail válido.';
                return;
            }

            // Verificando se a sugestão não está vazia
            if (suggestion === '') {
                errorDiv.textContent = 'Por favor, escreva sua sugestão.';
                return;
            }

            // Se tudo estiver ok, mostra mensagem de sucesso
            successDiv.textContent = 'Sua sugestão foi enviada com sucesso!';
            form.reset();
        });
    </script>

    <?php
        include('header_footer/footer.php');
    ?>

</body>

</html>