<?php

function dblLinear($n) {
    $v1 = 0;
    $v2 = 0;
    $s = [1];
    
    while(sizeOf($s) <= $n) {
        $d1 = (2 * $s[$v1]) + 1;
        $d2 = (3 * $s[$v2]) + 1;
        
        if ($d1 < $d2) {
            array_push($s, $d1);
            $v1++;
        } elseif ($d1 > $d2) {
           array_push($s, $d2);
           $v2++;
        } else {
            array_push($s, $d2);
            $v1++;
            $v2++;
        }
    }
   return array_pop($s);
}