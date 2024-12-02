<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/admin_busca.css">
    </head>
    <body>
        <h2>Buscar Cardápio por ID</h2>
        <form method="POST" action="admin.php?op=buscar">
            <label for="id_cardapio">ID do Cardápio</label>
            <input type="number" id="id_cardapio" name="id_cardapio" required>
            <button type="submit">Buscar</button>
        </form>
    </body>
</html>

<?php

    require_once('../class/controllers/Cardapio_Controller.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_cardapio = $_POST['id_cardapio'];

        $cardapioController = new Cardapio_Controller();
        $resultado = $cardapioController->BuscarPorId($id_cardapio);

        if ($resultado) {
            echo "<h2>Resultado da Busca</h2>";
            echo "<div class='cardapio-container'>";
            echo "<div class='cardapio-item'>";
            echo "<h3>Cardápio #" . $resultado->Id . "</h3>";
            echo "<p><b>ID:</b> " . $resultado->Id . "</p>";
            echo "<p><b>Data:</b> " . $resultado->Data . "</p>";
            echo "<p><b>Usuário:</b> " . $resultado->Usuario->Email . "</p>";
            echo "<p><b>Principal_Carne:</b> " . $resultado->Principal_Carne->Descricao . "</p>";
            echo "<p><b>Principal_Veg:</b> " . $resultado->Principal_Veg->Descricao . "</p>";
            echo "</div>";
            echo "</div>";
        } 
        
        else {
            echo "<p>Cardápio não encontrado com o ID fornecido.</p>";
        }
    } 
    
    else {
        echo "<p>Por favor, preencha o formulário para buscar um cardápio.</p>";
    }
?>