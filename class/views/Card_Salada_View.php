<?php

    class Card_Salada_View{

        function ExibirCardSalada($i){
            $card_saladaController = new Card_Salada_Controller();
            $listaCardSalada = $card_saladaController->Listar();

            if($i == 0){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Tipos de Saladas</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaCardSalada[0]->Salada->Descricao}</p>
                            <p class='form-control-plaintext'>{$listaCardSalada[1]->Salada->Descricao}</p>
                        </div>
                    </div>";
            }

            else if ($i == 1){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Saladas</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaCardSalada[2]->Salada->Descricao}</p>
                            <p class='form-control-plaintext'>{$listaCardSalada[3]->Salada->Descricao}</p>
                        </div>
                    </div>";
            }

            else if($i == 2){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Saladas</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaCardSalada[4]->Salada->Descricao}</p>
                            <p class='form-control-plaintext'>{$listaCardSalada[5]->Salada->Descricao}</p>
                        </div>
                    </div>";
            }

            else if ($i == 3){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Saladas</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaCardSalada[6]->Salada->Descricao}</p>
                            <p class='form-control-plaintext'>{$listaCardSalada[7]->Salada->Descricao}</p>
                        </div>
                    </div>";
            }

            else if($i == 4){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Saladas</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaCardSalada[8]->Salada->Descricao}</p>
                            <p class='form-control-plaintext'>{$listaCardSalada[9]->Salada->Descricao}</p>
                        </div>
                    </div>";
            }

            else{
                echo "Não foram cadastradas saladas com estes ID's";
            }
        }
    }
?>