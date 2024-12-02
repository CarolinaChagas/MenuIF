<?php

    require_once 'Cardapio_Controller.php';
    require_once 'Acompanhamento_Controller.php';

    class Card_Acomp_Controller {

        function Listar(){
            $servidor = 'pgsql:host=localhost;dbname=menuif';
            $usuario = 'postgres';
            $senha = '1234';
            $card_acomps = [];

            try {
                $pdo = new PDO($servidor, $usuario, $senha);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $cSQL = $pdo->prepare('select id_card_acomp, id_cardapio, id_acompanhamento from card_acomp;');
                $cSQL->execute();

                $cardapioController = new Cardapio_Controller();
                $acompanhamentoController = new Acompanhamento_Controller();

                while ($dados = $cSQL->fetch(PDO::FETCH_ASSOC)) {
                    $id_card_acomp = $dados['id_card_acomp'];
                    $id_cardapio = $dados['id_cardapio'];
                    $id_acompanhamento = $dados['id_acompanhamento'];

                    $cardapio = $cardapioController->BuscarPorId($id_cardapio);
                    $acompanhamento = $acompanhamentoController->BuscarPorId($id_acompanhamento);
    
                    if ($cardapio && $acompanhamento) { 
                        $card_acomp = new Card_Acomp($id_card_acomp, $cardapio, $acompanhamento);
                        array_push($card_acomps, $card_acomp);
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

            return $card_acomps;
        }
    }
?>