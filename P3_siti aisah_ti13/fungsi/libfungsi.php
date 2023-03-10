<?php

    function kelulusan($nilai){
        if ($nilai > 55){
            return 'LULUS';
        }elseif($nilai < 55){
            return 'TIDAK LULUS';
        }else{
            return 'TIDAK VALID';
        }

    }

    function grade($nilai){
        if($nilai <=35){
            return 'E';
        }elseif($nilai <= 55){
            return 'D';
        }elseif($nilai <= 69){
            return 'C';
        }elseif($nilai <= 84){
            return 'B';
        }elseif($nilai <= 100){
            return 'A';
        }else{
            return 'TIDAK VALID';
        }

    }

?>