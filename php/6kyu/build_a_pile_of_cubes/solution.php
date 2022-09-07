<?php

function findNb($m) {
    $s = 0;
    $x = 1;
    
    do {
      $s += pow($x, 3);
      
      if ($s === $m) {
        return $x;
      }
      
      $x++;
    } while ($s <= $m);
  
  return -1;
}