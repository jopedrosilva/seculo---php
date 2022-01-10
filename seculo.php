<?php

    function SeculoAno($ano){
        $seculo = $ano / 100;
        if ($ano % 100 > 0){
            $seculo = (int)$seculo + 1;
        }
        echo $seculo;
    }
     

    //Passe o ano aqui na função
    SeculoAno(2002);
