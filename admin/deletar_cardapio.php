<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    require_once('class/controllers/Cardapio_Controller.php');
    $resultado = Cardapio_Controller::deletarCardapio($id);

    if ($resultado) {
        echo "<p>Cardápio deletado com sucesso!</p>";
    } else {
        echo "<p>Erro ao deletar cardápio. Tente novamente.</p>";
    }
}
?>

<h2>Deletar Cardápio</h2>
<form method="POST" action="admin.php?op=deletar">
    <label for="id">ID do Cardápio</label>
    <input type="number" id="id" name="id" required>

    <button type="submit">Deletar</button>
</form>
