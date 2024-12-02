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
    <link rel="stylesheet" href="css/semana.css">
    <title>Segunda</title>
</head>

<body>
    <?php include 'header_footer/header.php'; ?>

    <div class="cardapio mt-5">
        <h1 class="text-center mb-5">Cardápio do Dia</h1>
        <?php
            $cardapioView = new Cardapio_View();
            $cardapioView->ExibirCardapios(0);

            $cardAcompView = new Card_Acomp_View();
            $cardAcompView->ExibirCardAcomp(0);

            $cardSaladaView = new Card_Salada_View();
            $cardSaladaView->ExibirCardSalada(0);

            $cardSobremesaView = new Card_Sobremesa_View();
            $cardSobremesaView->ExibirCardSobremesa(0);
        ?>
    </div>

    <?php include 'header_footer/footer.php';?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+I9E4vnYsiZXjM+GsLBEUqO2HX5m2" crossorigin="anonymous"></script>
</body>

</html>
