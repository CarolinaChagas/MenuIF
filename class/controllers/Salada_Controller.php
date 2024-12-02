<?php

    class Salada_Controller {

        function BuscarPorId($id_salada) {
            $servidor = 'pgsql:host=localhost;dbname=menuif';
            $usuario = 'postgres';
            $senha = '1234';

            try {
                $pdo = new PDO($servidor, $usuario, $senha);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $cSQL = $pdo->prepare('select * from salada where id_salada = :salada');
                $cSQL->bindParam('salada', $id_salada);
                $cSQL->execute();
                $dadosSalada = $cSQL->fetch(PDO::FETCH_ASSOC);

                if ($dadosSalada) {
                    $descricaoSalada = $dadosSalada['descricao'];
                    return new Salada($dadosSalada['id_salada'], $descricaoSalada);
                }
                
                else {
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