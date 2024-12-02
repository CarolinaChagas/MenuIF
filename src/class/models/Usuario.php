<?php

    class Usuario{
        public $Id;
        public $Email;
        public $Senha;

        function __construct($id = null, $email = null, $senha = null){
            $this->Id = $id;
            $this->Email = $email;
            $this->Senha = $senha;
        }

    }

?>