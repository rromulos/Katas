<?php

function alphabet_position(string $s): string {
    $s = preg_replace('/[^a-z]/i', '', strtoupper($s));
    if(empty($s))
        return '';
    $arLetters = str_split($s);
    $alphas = range('A', 'Z');
    $arrayValues = [];
    foreach ($arLetters as $key => $value) {
        $idxV = array_search($value,$alphas);
        array_push($arrayValues, $idxV+1);
        $idxV = 0;
    }
    return implode(" ",$arrayValues);
  }