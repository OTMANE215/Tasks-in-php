
<?php
function Factorial($Number){
    $NumFacto = 1;
    for($i = 1; $i <= $Number; $i++)
    {
        $NumFacto *= $i;
    }
    return $NumFacto;
}

echo "Result " . Factorial(5); 
?>
