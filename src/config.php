<?php

    spl_autoload_register(function($nomeClasse){

        $pastaClasses = 'class/';

        $possiveisCaminhosPasta = [
            $pastaClasses,
            $pastaClasses . 'models/',
            $pastaClasses . 'views/',
            $pastaClasses . 'controllers/'
        ];

        foreach ($possiveisCaminhosPasta as $pastaAtual){
            $nomeArquivo = $pastaAtual . $nomeClasse . '.php';

            if(file_exists($nomeArquivo)){
                require_once $nomeArquivo;
                break;
            }
        }

    });


?>
