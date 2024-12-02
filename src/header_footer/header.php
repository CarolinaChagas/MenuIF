<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/footer_header.css">
    <title>Header</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.php">
                <img src="img/menu_if.png" alt="Logotipo do Sistema MenuIF" class="logo"> 
            </a>
            <div class="menu">
                <ul>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dias da Semana</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../segunda.php">Segunda</a></li>
                            <li><a class="dropdown-item" href="../terca.php">Terça</a></li>
                            <li><a class="dropdown-item" href="../quarta.php">Quarta</a></li>
                            <li><a class="dropdown-item" href="../quinta.php">Quinta</a></li>
                            <li><a class="dropdown-item" href="../sexta.php">Sexta</a></li>
                        </ul>
                    </li>
                    <li><a href="sugestoes.php">Sugestões</a></li>
                </ul>
            </div>

            <a href="login.php" class="login">
                <img src="img/user.png" alt="Imagem de um Icon de User representando o Login para o Admin">
            </a>
        </nav>
    </header>   
</body>
</html>