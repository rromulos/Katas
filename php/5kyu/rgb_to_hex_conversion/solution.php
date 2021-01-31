<?php

function checkValue($arValues){
    $finalVal = "";
    foreach($arValues as $val){
        if($val > 255 ){
            $val = 255;
        }elseif($val < 0){
            $val = 0;
        }
        $convertedValue = dechex($val);
        if(strlen($convertedValue) < 2){
            $convertedValue = "0".$convertedValue;
        }
        $finalVal .= $convertedValue;
    }
    return strtoupper($finalVal);
}

function rgb($r,$g,$b){
    $arrValues = array();
    array_push($arrValues, $r, $g, $b);
    return checkValue($arrValues);
}