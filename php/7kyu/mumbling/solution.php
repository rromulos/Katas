<?php

function accum($s) {
    foreach(str_split($s) as $key => $value){
        $fSentence .= ucwords(strtolower(str_repeat($value, $key+1)))."-";
    }
    return rtrim($fSentence,"-");
}