<?php

function longest($a, $b) {
    $combinedString = $a . $b;
    $charArray = str_split($combinedString);
    $uniqueChars = array_unique($charArray);
    sort($uniqueChars);
    return implode('', $uniqueChars);
}