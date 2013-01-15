<?php

    function factorial($n) {
        
        if($n<=1){
            return $n;
        }
        $fact = $n * factorial($n-1);
        return $fact;
    }

    echo factorial(5);
?>
