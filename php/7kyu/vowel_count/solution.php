<?php

function getCount($str) {
    $vCount = 0;
    $arVowels = array("a","e","i","o","u");
    $vowelsCount = 0;
    $arString = str_split($str);
    foreach($arString as $letter){
        $result = array_search($letter, $arVowels);        
        (is_int($result)) ? $vCount++ : $vCount;
    }
    return $vCount;
  }