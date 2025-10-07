<?php
    function IsPrime($Number){
        if($Number <= 1) return false;
        for($i = 2; $i <= sqrt($Number); $i++){
            if($Number % $i == 0) return false;
        }
        return true;
    }

    echo IsPrime(9) ? "Prime" : "Not Prime";
?>