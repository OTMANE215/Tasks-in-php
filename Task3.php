// my version  

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


// version of chatgpt 
// 1. Using recursion (function calls itself)

<?php
function Factorial($n) {
    if ($n <= 1) return 1;
    return $n * Factorial($n - 1);
}

echo "Result: " . Factorial(5);
?>

// 2. Using while loop

<?php
function Factorial($n) {
    $result = 1;
    while ($n > 1) {
        $result *= $n;
        $n--;
    }
    return $result;
}

echo "Result: " . Factorial(5);
?>


// 3. Using built-in functions (advanced)

<?php
function Factorial($n) {
    return array_product(range(1, $n));
}

echo "Result: " . Factorial(5);
?>


