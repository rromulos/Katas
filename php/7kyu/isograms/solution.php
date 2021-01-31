<?php

function isIsogram($string) {
    $string = strtolower($string);
    $arData = array_count_values(str_split($string));
    rsort($arData);
    return ($arData[0] > 1) ? false : true;
  }