<?php

    class Sobremesa_Controller {

        function BuscarPorId($id_sobremesa) {
            $servidor = 'pgsql:host=carol-db;dbname=menuif';
            $usuario = 'postgres';
            $senha = '1234';

            try {
                $pdo = new PDO($servidor, $usuario, $senha);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $cSQL = $pdo->prepare('select * from sobremesa where id_sobremesa = :sobremesa');
                $cSQL->bindParam('sobremesa', $id_sobremesa);
                $cSQL->execute();
                $dadosSobremesa = $cSQL->fetch(PDO::FETCH_ASSOC);

                if ($dadosSobremesa) {
                    $descricaoSobremesa = $dadosSobremesa['descricao'];
                    return new Sobremesa($dadosSobremesa['id_sobremesa'], $descricaoSobremesa);
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