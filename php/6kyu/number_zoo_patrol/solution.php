<?php

function find_number(array $a): int {
    if (empty($a)) return 1; 
    $diffAr = array_diff(range(1,max($a)),$a);
    $exKey = array_keys($diffAr);
    if (empty($diffAr)) return max($a)+1;
    return intval($diffAr[$exKey[0]]);
}