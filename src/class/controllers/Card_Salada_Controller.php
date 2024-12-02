<?php

    require_once 'Cardapio_Controller.php';
    require_once 'Salada_Controller.php';

    class Card_Salada_Controller {

        function Listar(){
            $servidor = 'pgsql:host=carol-db;dbname=menuif';
            $usuario = 'postgres';
            $senha = '1234';
            $card_saladas = [];

            try {
                $pdo = new PDO($servidor, $usuario, $senha);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $cSQL = $pdo->prepare('select id_card_salada, id_cardapio, id_salada from card_salada;');
                $cSQL->execute();

                $cardapioController = new Cardapio_Controller();
                $saladaController = new Salada_Controller();

                while ($dados = $cSQL->fetch(PDO::FETCH_ASSOC)) {
                    $id_card_salada = $dados['id_card_salada'];
                    $id_cardapio = $dados['id_cardapio'];
                    $id_salada = $dados['id_salada'];

                    $cardapio = $cardapioController->BuscarPorId($id_cardapio);
                    $salada = $saladaController->BuscarPorId($id_salada);

                    if($cardapio && $salada){
                        // Criação do objeto Card_Salada
                        $card_salada = new Card_Salada($id_card_salada, $cardapio, $salada);
                        array_push($card_saladas, $card_salada);
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

            return $card_saladas;
        }
    }
?>