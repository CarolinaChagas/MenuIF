<?php
    require_once('../class/models/Usuario.php');
    require_once('../class/controllers/Cardapio_Controller.php');
    require_once('../class/views/Cardapio_View.php');

    echo '<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cardápios Cadastrados</title>
        <link rel="stylesheet" href="../css/admin_listar.css">
    </head>
    <body>';

    echo "<h2>Lista de Cardápios do Refeitório</h2>";

    function ExibirCardapios() {

        $cardapioController = new Cardapio_Controller();
        $listaTodosCardapios = $cardapioController->Listar();

        if (!empty($listaTodosCardapios)) {
            echo '<div class="cardapio-container">';

                foreach ($listaTodosCardapios as $cardapio) {
                    echo '<div class="cardapio-item">'; 
                        echo '<h3>Cardápio #' . $cardapio->Id . '</h3>';
                        echo '<p><b>ID:</b> ' . $cardapio->Id . '</p>';
                        echo '<p><b>Data:</b> ' . $cardapio->Data . '</p>';
                        echo '<p><b>Usuário:</b> ' . $cardapio->Usuario->Email . '</p>';
                        echo '<p><b>Principal_Carne:</b> ' . $cardapio->Principal_Carne->Descricao . '</p>';
                        echo '<p><b>Principal_Veg:</b> ' . $cardapio->Principal_Veg->Descricao. '</p>';
                    echo '</div>';
                }

            echo '</div>';
        } 
        
        else {
            echo 'Não existem cardápios cadastrados neste refeitório.';
        }
    }

    ExibirCardapios();

    echo '</body>
    </html>';
?>