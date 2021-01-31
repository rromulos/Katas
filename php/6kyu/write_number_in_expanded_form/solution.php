<?php

function expanded_form(int $n): string {
    $sizeOf = strlen($n);
    for ($i=0; $i < $sizeOf; $i++) { 
        (substr($n,$i,1) == '0') ?: $strFinal .= substr($n,$i,1).str_repeat("0",$sizeOf-$i-1)." + ";
    }
    return substr($strFinal, 0, -3);
  }