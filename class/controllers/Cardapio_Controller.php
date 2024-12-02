<?php
    require_once('Usuario_Controller.php');
    require_once(realpath(__DIR__ . '/../models/Principal_Carne.php'));
    require_once(realpath(__DIR__ . '/../models/Principal_Veg.php'));
    require_once(realpath(__DIR__ . '/../models/Cardapio.php'));

    class Cardapio_Controller {

        function Listar(){
            
            $servidor = 'pgsql:host=localhost;dbname=menuif';
            $usuario = 'postgres';
            $senha = '1234';
            $cardapios = [];

            try {
                $pdo = new PDO($servidor, $usuario, $senha);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $cSQL = $pdo->prepare('select id_cardapio, data_cardapio, id_usuario, id_principal_carne, id_principal_veg from cardapio;');
                $cSQL->execute();

                $usuario = Usuario_Controller::getAdministrador();

                if (!$usuario) {
                    echo "Erro: Administrador não encontrado.";
                    return [];
                }

                while ($dados = $cSQL->fetch(PDO::FETCH_ASSOC)) {
                    $id_cardapio = $dados['id_cardapio'];
                    $data = $dados['data_cardapio'];
                    $id_principal_carne = $dados['id_principal_carne'];
                    $id_principal_veg = $dados['id_principal_veg'];

                    // Encontrando a Descrição do Prato Principal com Carne associado ao id_principal_carne
                    $cSQL_Principal_Carne = $pdo->prepare('select descricao from principal_carne where id_principal_carne = :principal_carne');
                    $cSQL_Principal_Carne->bindParam('principal_carne', $id_principal_carne);
                    $cSQL_Principal_Carne->execute();
                    $dadosCarne = $cSQL_Principal_Carne->fetch(PDO::FETCH_ASSOC);
                    $descricaoPratoCarne = $dadosCarne['descricao'];

                    // Encontrando a Descrição do Prato Principal Vegetariano associado ao id_principal_veg
                    $cSQL_Principal_Veg = $pdo->prepare('select descricao from principal_veg where id_principal_veg = :principal_veg');
                    $cSQL_Principal_Veg->bindParam('principal_veg', $id_principal_veg);
                    $cSQL_Principal_Veg->execute();
                    $dadosVeg = $cSQL_Principal_Veg->fetch(PDO::FETCH_ASSOC);
                    $descricaoPratoVeg = $dadosVeg['descricao'];

                    $principal_carne = new Principal_Carne($id_principal_carne, $descricaoPratoCarne);
                    $principal_veg = new Principal_Veg($id_principal_veg, $descricaoPratoVeg);

                    $cardapio = new Cardapio($id_cardapio, $data, $usuario, $principal_carne, $principal_veg);

                    array_push($cardapios, $cardapio);

                }
                $pdo = null;
            } 
            
            catch (PDOException $e) {
                echo 'Erro: ' . $e->getMessage();
            }

            return $cardapios;
        }

        function BuscarPorId($id_cardapio) {
            $servidor = 'pgsql:host=localhost;dbname=menuif';
            $usuario = 'postgres';
            $senha = '1234';
    
            try {
                $pdo = new PDO($servidor, $usuario, $senha);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $cSQL = $pdo->prepare('select * from cardapio where id_cardapio = :cardapio');
                $cSQL->bindParam('cardapio', $id_cardapio);
                $cSQL->execute();
                $dadosCardapio = $cSQL->fetch(PDO::FETCH_ASSOC);
                
                if ($dadosCardapio) {
                    
                    $cSQL_Usuario = $pdo->prepare('select * from usuario where id_usuario = :usuario');
                    $cSQL_Usuario->bindParam('usuario', $dadosCardapio['id_usuario']);
                    $cSQL_Usuario->execute();
                    $dadosUsuario = $cSQL_Usuario->fetch(PDO::FETCH_ASSOC);
                    $usuario = new Usuario($dadosUsuario['id_usuario'], $dadosUsuario['email'], $dadosUsuario['senha']);
    
                    // Encontrando a Descrição do Prato Principal com Carne associado ao id_principal_carne
                    $cSQL_Principal_Carne = $pdo->prepare('select descricao from principal_carne where id_principal_carne = :principal_carne');
                    $cSQL_Principal_Carne->bindParam('principal_carne', $dadosCardapio['id_principal_carne']);
                    $cSQL_Principal_Carne->execute();
                    $dadosCarne = $cSQL_Principal_Carne->fetch(PDO::FETCH_ASSOC);
                    $descricaoPratoCarne = $dadosCarne['descricao'];
                    $principal_carne = new Principal_Carne($dadosCardapio['id_principal_carne'], $descricaoPratoCarne);
    
                    // Encontrando a Descrição do Prato Principal Vegetariano associado ao id_principal_veg
                    $cSQL_Principal_Veg = $pdo->prepare('select descricao from principal_veg where id_principal_veg = :principal_veg');
                    $cSQL_Principal_Veg->bindParam('principal_veg', $dadosCardapio['id_principal_veg']);
                    $cSQL_Principal_Veg->execute();
                    $dadosVeg = $cSQL_Principal_Veg->fetch(PDO::FETCH_ASSOC);
                    $descricaoPratoVeg = $dadosVeg['descricao'];
                    $principal_veg = new Principal_Veg($dadosCardapio['id_principal_veg'], $descricaoPratoVeg);
    
                    return new Cardapio($dadosCardapio['id_cardapio'], $dadosCardapio['data_cardapio'], $usuario, $principal_carne, $principal_veg);
                }
                $pdo = null;
            } 
            
            catch (PDOException $e) {
                echo 'Erro: ' . $e->getMessage();
            }
    
            return null;
        }
    }
?>