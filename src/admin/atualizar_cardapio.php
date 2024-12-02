<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome_cardapio = $_POST['nome_cardapio'];
    $descricao = $_POST['descricao'];

    require_once('class/controllers/Cardapio_Controller.php');
    $resultado = Cardapio_Controller::atualizarCardapio($id, $nome_cardapio, $descricao);

    if ($resultado) {
        echo "<p>Cardápio atualizado com sucesso!</p>";
    } else {
        echo "<p>Erro ao atualizar cardápio. Tente novamente.</p>";
    }
}
?>

<h2>Atualizar Cardápio</h2>
<form method="POST" action="admin.php?op=atualizar">
    <label for="id">ID do Cardápio</label>
    <input type="number" id="id" name="id" required>

    <label for="nome_cardapio">Nome do Cardápio</label>
    <input type="text" id="nome_cardapio" name="nome_cardapio" required>

    <label for="descricao">Descrição</label>
    <textarea id="descricao" name="descricao" rows="4" required></textarea>

    <button type="submit">Atualizar</button>
</form>
