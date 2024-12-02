<?php

    class Principal_Carne{
        public $Id;
        public $Descricao;

        function __construct($id = null, $descricao = null){
            $this->Id = $id;
            $this->Descricao = $descricao;
        }

    }

?>