<?php
    class Principal_Veg_Controller {

        public static function find($id) {
            $servidor = 'pgsql:host=localhost;dbname=menuif';
            $usuario = 'postgres';
            $senha = '1234';

            try {
                $pdo = new PDO($servidor, $usuario, $senha);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = 'SELECT id_principal_veg, descricao FROM principal_veg WHERE id_principal_veg = :id';
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();

                $dados = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($dados) {
                    return new Principal_Veg($dados['id_principal_veg'], $dados['descricao']);
                }
                
                else {
                    return null;
                }

            } catch (PDOException $e) {
                echo 'Erro ao buscar prato principal vegetariano: ' . $e->getMessage();
                return null;
            }
        }

        public static function listar() {
            $servidor = 'pgsql:host=localhost;dbname=menuif';
            $usuario = 'postgres';
            $senha = '1234';
        
            try {
                $pdo = new PDO($servidor, $usuario, $senha);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "SELECT id, descricao FROM principal_veg";  
                $stmt = $pdo->query($sql);
                
                $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
        
                $pdo = null; 
                return $resultados;
        
            } 
            
            catch (PDOException $e) {
                echo "Erro na consulta: " . $e->getMessage();
                return []; 
            }
        }        
    }
?>