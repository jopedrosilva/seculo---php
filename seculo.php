<?php

    function SeculoAno($ano){
        $seculo = $ano / 100;
        if ($ano % 100 > 0){
            $seculo = (int)$seculo + 1;
        }
        echo 'Ano ' . $ano . " = século " . $seculo;
    }
     
    
    SeculoAno(1700);
