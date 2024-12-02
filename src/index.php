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
    <link rel="stylesheet" href="css/index.css">
    <title>MenuIF</title>
</head>
<body>
    <?php
        include('header_footer/header.php');
    ?>

    <div class="meio">
        <div class="texto">
            <h1>Sistema para Visualização de Cardápios Semanais</h1>
            <p>Para visualização dos cardápios ofertados, acesse os link Dias da Semana, no menu de navegação.</p>
            <button class="botao"><a href="https://www.google.com/maps/place/Instituto+Federal+de+Educa%C3%A7%C3%A3o+Ci%C3%AAncia+e+Tecnologia+Catarinense+-+Campus+Videira/@-27.0268712,-51.1477793,645m/data=!3m2!1e3!4b1!4m6!3m5!1s0x94e14fa5b07c8fd5:0xfc69f726d4659812!8m2!3d-27.026876!4d-51.1452044!16s%2Fg%2F1tp905_l?entry=ttu&g_ep=EgoyMDI0MTExOS4yIKXMDSoASAFQAw%3D%3D" target="_blank">Localização do Refeitório</a></button>
        </div>

        <div class="imagem">
            <img src="img/principal_index.png" alt="">
        </div>
    </div>

    <?php
        include('header_footer/footer.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqA5jrrr8t+Uu91c6SO8pP0h0Ro1iFEQ6Wl4CVPfgG/4h" crossorigin="anonymous"></script>
</body>
</html>