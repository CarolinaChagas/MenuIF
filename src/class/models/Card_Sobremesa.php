<?php

    class Card_Sobremesa{
        public $Id;
        public $Cardapio;
        public $Sobremesa;

        function __construct($id = null, Cardapio $cardapio = null, Sobremesa $sobremesa = null){
            $this->Id = $id;
            $this->Cardapio = $cardapio;
            $this->Sobremesa = $sobremesa;
        }

    }

?>