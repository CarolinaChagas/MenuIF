<?php

    class Cardapio {
        public $Id;
        public $Data;
        public $Usuario;
        public $Principal_Carne;
        public $Principal_Veg;

        function __construct($id = null, $data = null, Usuario $usuario = null, Principal_Carne $principal_carne = null, Principal_Veg $principal_veg = null){
            $this->Id = $id;
            $this->Data = $data;
            $this->Usuario = $usuario;
            $this->Principal_Carne = $principal_carne;
            $this->Principal_Veg = $principal_veg;
        }

    }

?>