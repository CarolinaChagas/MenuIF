<?php
    session_start();

    if (!isset($_SESSION['usuario'])) {
        header('Location: ../login.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Administrativa</title>
    <link rel="shortcut icon" href="../img/menu_if.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="admin-container">
        <nav class="sidebar">
            <a href="admin.php"><h2>Área Administrativa</h2></a>
            <ul>
                <li><a href="admin.php?op=cadastrar">Cadastrar Cardápio</a></li>
                <li><a href="admin.php?op=listar">Listar Cardápios</a></li>
                <li><a href="admin.php?op=buscar">Buscar Cardápio</a></li>
                <li><a href="admin.php?op=atualizar">Atualizar Cardápio</a></li>
                <li><a href="admin.php?op=deletar">Deletar Cardápio</a></li>
                <li><a href="sair.php">Sair</a></li>
            </ul>
        </nav>

        <div class="content">

            <?php
            if (isset($_GET['op'])) {
                $op = $_GET['op'];

                switch ($op) {
                    case 'cadastrar':
                        include 'cadastrar_cardapio.php';
                        break;
                    case 'listar':
                        include 'listar_cardapios.php';
                        break;
                    case 'buscar':
                        include 'buscar_cardapios.php';
                        break;
                    case 'atualizar':
                        include 'atualizar_cardapio.php';
                        break;
                    case 'deletar':
                        include 'deletar_cardapio.php';
                        break;
                    default:
                        echo "<p>Selecione uma ação no menu lateral.</p>";
                        break;
                }
            } else {
                echo "<h2>Seja bem-vindo Administrador(a)</h2>";
                echo "<p>Por favor, selecione uma ação no menu lateral.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
