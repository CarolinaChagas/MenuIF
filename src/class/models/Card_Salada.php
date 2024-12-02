<?php

    class Card_Salada{
        public $Id;
        public $Cardapio;
        public $Salada;

        function __construct($id = null, Cardapio $cardapio = null, Salada $salada = null){
            $this->Id = $id;
            $this->Cardapio = $cardapio;
            $this->Salada = $salada;
        }

    }

?>