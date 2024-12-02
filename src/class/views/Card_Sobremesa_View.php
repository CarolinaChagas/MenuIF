<?php

    class Card_Sobremesa_View{

        function ExibirCardSobremesa($i){
            $card_sobremesaController = new Card_Sobremesa_Controller();
            $listaCardSobremesa = $card_sobremesaController->Listar();

            if($i == 0){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Sobremesa</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaCardSobremesa[0]->Sobremesa->Descricao}</p>
                        </div>
                    </div>";
            }

            else if ($i == 1){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Sobremesa</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaCardSobremesa[1]->Sobremesa->Descricao}</p>
                        </div>
                    </div>";
            }
            
            else if ($i == 2){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Sobremesa</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaCardSobremesa[2]->Sobremesa->Descricao}</p>
                        </div>
                    </div>";
            }

            else if($i == 3){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Sobremesa</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaCardSobremesa[3]->Sobremesa->Descricao}</p>
                        </div>
                    </div>";
            }

            else if($i == 4){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Sobremesa</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaCardSobremesa[4]->Sobremesa->Descricao}</p>
                        </div>
                    </div>";
            }

            else{
                echo "Não foi cadstrada sobremesa com este ID";
            }

        }
    }
?>