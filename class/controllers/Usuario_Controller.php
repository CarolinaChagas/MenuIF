<?php

    require_once(realpath(__DIR__ . '/../models/Usuario.php'));

    class Usuario_Controller {

        public static function getAdministrador() {
            $servidor = 'pgsql:host=localhost;dbname=menuif';
            $usuario = 'postgres';
            $senha = '1234';

            try {
                $pdo = new PDO($servidor, $usuario, $senha);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = 'SELECT id_usuario, email, senha FROM usuario LIMIT 1';
                $stmt = $pdo->prepare($sql);
                $stmt->execute();

                $dados = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($dados) {
                    return new Usuario($dados['id_usuario'], $dados['email'], $dados['senha']);
                } 
                
                else {

                    return null;
                }

            } catch (PDOException $e) {
                echo 'Erro ao buscar usuário: ' . $e->getMessage();
                return null;
            }
        }
    }
?>