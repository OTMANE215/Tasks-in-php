<?php 
    function Ispalindrome($Word){
        $WorldLen = strlen($Word);
        for($i = 0; $i < $WorldLen/2 ; $i++){
            if($Word[$i] != $Word[$WorldLen-$i-1])
                return false;
        }
        return true;
    }
    echo Ispalindrome("yahay") ? "is Palindrome" : "is not palindrome";
?>


<!-- 
Bonus: make it case-insensitive :
// this example from chatgpt
function IsPalindrome($word) {
    $word = strtolower($word);
    return strrev($word) === $word;
}

echo IsPalindrome("RaceCar") ? "is Palindrome" : "is not palindrome"; -->
