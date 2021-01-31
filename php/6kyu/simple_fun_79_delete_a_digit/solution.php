<?php

function deleteDigit($n){
    $length = strlen($n);
    $arValues = [];
    for ($i=0; $i < $length; $i++) { 
        $strOr = $n;
        array_push($arValues, substr_replace($strOr, '', strpos($strOr,substr($strOr,$i,$length)), 1));
        rsort($arValues);
    }
    return (int)$arValues[0];
  }