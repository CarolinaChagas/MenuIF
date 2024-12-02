<?php

    class Acompanhamento_Controller {

        function BuscarPorId($id_acompanhamento) {
            $servidor = 'pgsql:host=localhost;dbname=menuif';
            $usuario = 'postgres';
            $senha = '1234';

            try {
                $pdo = new PDO($servidor, $usuario, $senha);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $cSQL = $pdo->prepare('select * from acompanhamento where id_acompanhamento = :acompanhamento');
                $cSQL->bindParam('acompanhamento', $id_acompanhamento);
                $cSQL->execute();
                $dadosAcomp = $cSQL->fetch(PDO::FETCH_ASSOC);

                if ($dadosAcomp) {
                    $descricaoAcomp = $dadosAcomp['descricao'];
                    return new Acompanhamento($dadosAcomp['id_acompanhamento'], $descricaoAcomp);
                } else {
                    return null;
                }
            } 
            
            catch (PDOException $e) {
                echo 'Erro: ' . $e->getMessage();
            }

            return null;
        }
    }
?>