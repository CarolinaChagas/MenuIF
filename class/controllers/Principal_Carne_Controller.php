<?php    
    class Principal_Carne_Controller {

        public static function find($id) {
            $servidor = 'pgsql:host=localhost;dbname=menuif';
            $usuario = 'postgres';
            $senha = '1234';

            try {
                $pdo = new PDO($servidor, $usuario, $senha);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = 'SELECT id_principal_carne, descricao FROM principal_carne WHERE id_principal_carne = :id';
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();

                $dados = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($dados) {
                    return new Principal_Carne($dados['id_principal_carne'], $dados['descricao']);
                } 
                
                else {
                    return null;
                }

            } 
            
            catch (PDOException $e) {
                echo 'Erro ao buscar prato principal de carne: ' . $e->getMessage();
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
                
                $sql = "SELECT id, descricao FROM principal_carne";  
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
