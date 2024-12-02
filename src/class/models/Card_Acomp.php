<?php

    class Card_Acomp{
        public $Id;
        public $Cardapio;
        public $Acompanhamento;

        function __construct($id = null, Cardapio $cardapio = null, Acompanhamento $acompanhamento = null){
            $this->Id = $id;
            $this->Cardapio = $cardapio;
            $this->Acompanhamento = $acompanhamento;
        }

    }

?>