<?php

function solution ($roman) {
    $romanConversionTable = array('M'=>1000,'CM'=>900,'D'=>500,'CD'=> 400,'C'=>100,'XC'=>90,'L'=>50,'XL'=>40,'X'=> 10,'IX'=>9,'V'=>5,'IV'=>4,'I'=>1);
    $lastElement = null;
    $romanElements = str_split($roman);
    $arrayToCal = [];
    foreach($romanElements as $elements => $element){
        $valueFromTable = $romanConversionTable[$element] ?? null;
        if(!is_null($lastElement)){
            $valueCombined = $romanConversionTable[$lastElement.$element] ?? null;
            if(!is_null($valueCombined)){
                array_pop($arrayToCal);
                array_push($arrayToCal, $valueCombined);
                continue;
            }
        }    
        array_push($arrayToCal,$valueFromTable);  
        $lastElement = $element;
    }
    return array_sum($arrayToCal);
  }