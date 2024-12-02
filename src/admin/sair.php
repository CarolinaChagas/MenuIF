<?php
    session_start();

    if (isset($_SESSION['usuario_logado'])) {

        session_unset();
        session_destroy();
        header("Location: ../index.php");
        exit;
    } 
    
    else {
        echo "Usuário não está logado";
        header("Location: ../index.php");
        exit;
    }
?>