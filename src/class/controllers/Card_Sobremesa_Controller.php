<?php

    require_once 'Cardapio_Controller.php';
    require_once 'Sobremesa_Controller.php';

    class Card_Sobremesa_Controller {

        function Listar(){
            $servidor = 'pgsql:host=carol-db;dbname=menuif';
            $usuario = 'postgres';
            $senha = '1234';
            $card_sobremesas = [];

            try {
                $pdo = new PDO($servidor, $usuario, $senha);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $cSQL = $pdo->prepare('select id_card_sobremesa, id_cardapio, id_sobremesa from card_sobremesa;');
                $cSQL->execute();

                $cardapioController = new Cardapio_Controller();
                $sobremesaController = new Sobremesa_Controller();

                while ($dados = $cSQL->fetch(PDO::FETCH_ASSOC)) {
                    $id_card_sobremesa = $dados['id_card_sobremesa'];
                    $id_cardapio = $dados['id_cardapio'];
                    $id_sobremesa = $dados['id_sobremesa'];
                    
                    $cardapio = $cardapioController->BuscarPorId($id_cardapio);
                    $sobremesa = $sobremesaController->BuscarPorId($id_sobremesa);

                    if($cardapio && $sobremesa){
                        $card_sobremesa = new Card_Sobremesa($id_card_sobremesa, $cardapio, $sobremesa);
                        array_push($card_sobremesas, $card_sobremesa);
                    }

                    else{
                        return null;
                    }

                }

                $pdo = null;
            } 
            
            catch (PDOException $e) {
                echo 'Erro: ' . $e->getMessage();
            }

            return $card_sobremesas;
        }
    }
?>