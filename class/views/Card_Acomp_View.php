<?php

    class Card_Acomp_View{

        function ExibirCardAcomp($i){
            $card_acompController = new Card_Acomp_Controller();
            $listaCardAcomp = $card_acompController->Listar();

            if($i == 0){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Acompanhamento</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaCardAcomp[0]->Acompanhamento->Descricao}</p>
                        </div>
                    </div>";
            }
        
            else if($i == 1){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Acompanhamento</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaCardAcomp[1]->Acompanhamento->Descricao}</p>
                        </div>
                    </div>";
            }

            else if($i == 2){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Acompanhamento</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaCardAcomp[2]->Acompanhamento->Descricao}</p>
                        </div>
                    </div>";
            }

            else if($i == 3){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Acompanhamento</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaCardAcomp[3]->Acompanhamento->Descricao}</p>
                        </div>
                    </div>";
            }

            else if($i == 4){
                echo "<div class='row mb-3'>
                        <label class='col-sm-3 col-form-label'>Acompanhamento</label>
                        <div class='col-sm-9'>
                            <p class='form-control-plaintext'>{$listaCardAcomp[4]->Acompanhamento->Descricao}</p>
                        </div>
                    </div>";
            }

            else{
                echo "Ainda não foi cadastrado acompanhamento com este ID";
            } 
        }
    }
?>