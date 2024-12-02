<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_cardapio = $_POST['id_cardapio']; 
        $data = $_POST['data']; 
        $usuario_id = $_POST['usuario_id'];  // ID do usuário, deve vir da sessão
        $principal_carne = $_POST['principal_carne'];  // Chave estrangeira da tabela principal_carne
        $principal_veg = $_POST['principal_veg'];  // Chave estrangeira da tabela principal_veg

        require_once('Cardapio_Controller.php');
        $resultado = Cardapio_Controller::cadastrarCardapio($id_cardapio, $data, $usuario_id, $principal_carne, $principal_veg);

        if ($resultado) {
            echo "<p>Cardápio cadastrado com sucesso!</p>";
        } else {
            echo "<p>Erro ao cadastrar cardápio. Tente novamente.</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cardápio</title>
</head>
<body>
    <h2>Cadastrar Cardápio</h2>
    <form method="POST" action="admin.php?op=cadastrar">

        <label for="id_cardapio">Id do Cardápio</label>
        <input type="number" id="id_cardapio" name="id_cardapio" required>

        <label for="data">Data</label>
        <input type="date" id="data" name="data" required>

        <label for="usuario_id">Usuário</label>
        <input type="number" id="usuario_id" name="usuario_id" required> 

        <label for="principal_carne">Prato Principal (Carne)</label>
        <select id="principal_carne" name="principal_carne" required>
            <option value="">Selecione</option>
            <?php
                require_once(realpath(__DIR__ . '/../models/Principal_Carne.php'));
                $pratosCarne = Principal_Carne::listar();
                foreach ($pratosCarne as $prato) {
                    echo "<option value='" . $prato->getId() . "'>" . $prato->getDescricao() . "</option>";
                }
            ?>
        </select>

        <label for="principal_veg">Prato Principal (Vegetariano)</label>

        <select id="principal_veg" name="principal_veg" required>
            <option value="">Selecione</option>
            <?php
                require_once(realpath(__DIR__ . '/../models/Principal_Veg.php'));
                $pratosVeg = Principal_Veg::listar();
                foreach ($pratosVeg as $prato) {
                    echo "<option value='" . $prato->getId() . "'>" . $prato->getDescricao() . "</option>";
                }
            ?>
        </select>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
