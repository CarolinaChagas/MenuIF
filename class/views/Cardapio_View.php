<?php

    class Cardapio_View{

        function ExibirCardapios($i){
            $cardapioController = new Cardapio_Controller();
            $listaTodosCardapios = $cardapioController->Listar();

            if ($i == 0) {
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>ID do Cardápio</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaTodosCardapios[0]->Id}</p>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Prato Principal com Carne</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaTodosCardapios[0]->Principal_Carne->Descricao}</p>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Prato Principal Vegetariano</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaTodosCardapios[0]->Principal_Veg->Descricao}</p>
                        </div>
                    </div>";  
            }

            else if ($i == 1) {
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>ID do Cardápio</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaTodosCardapios[1]->Id}</p>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Prato Principal com Carne</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaTodosCardapios[1]->Principal_Carne->Descricao}</p>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Prato Principal Vegetariano</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaTodosCardapios[1]->Principal_Veg->Descricao}</p>
                        </div>
                    </div>";  
            }

            else if($i == 2){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>ID do Cardápio</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaTodosCardapios[2]->Id}</p>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Prato Principal com Carne</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaTodosCardapios[2]->Principal_Carne->Descricao}</p>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Prato Principal Vegetariano</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaTodosCardapios[2]->Principal_Veg->Descricao}</p>
                        </div>
                    </div>"; 
            }

            else if ($i == 3){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>ID do Cardápio</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaTodosCardapios[3]->Id}</p>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Prato Principal com Carne</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaTodosCardapios[3]->Principal_Carne->Descricao}</p>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Prato Principal Vegetariano</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaTodosCardapios[3]->Principal_Veg->Descricao}</p>
                        </div>
                    </div>"; 
            }

            else if($i == 4){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>ID do Cardápio</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaTodosCardapios[4]->Id}</p>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Prato Principal com Carne</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaTodosCardapios[4]->Principal_Carne->Descricao}</p>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Prato Principal Vegetariano</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaTodosCardapios[4]->Principal_Veg->Descricao}</p>
                        </div>
                    </div>"; 
            }

            else{
                echo "Ainda não foi cadastrado nenhum cardápio com este ID";
            }
                 
        }
    }
?>