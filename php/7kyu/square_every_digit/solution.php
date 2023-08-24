<?php

function square_digits($num): int {
    $numStr = strval($num);
    $result = '';
    for ($i = 0; $i < strlen($numStr); $i++) {
        $digit = intval($numStr[$i]);
        $result .= strval($digit * $digit);
    }
    return intval($result);
}