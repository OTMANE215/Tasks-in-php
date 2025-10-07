<?php
function RevString($text){
    $NewText = "";
    for($i = strlen($text) - 1; $i >= 0; $i--){
        $NewText .= $text[$i];
    }
    return $NewText;
}

$Text = RevString("HELLO");

echo $Text; // Output: OLLEH
?>
