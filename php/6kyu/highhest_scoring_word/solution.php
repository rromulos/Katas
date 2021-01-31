<?php

function high($x) {
    $scoreTable = range('a', 'z');
    $arWords = explode(" ",$x);
    $totalValue = 0;
    $arFinalScore = array();
    foreach($arWords as $word){
        $arWordSplitted = str_split($word);
        foreach($arWordSplitted as $letter){
            $scoreSum = (int)array_search($letter, $scoreTable)+1;
            $totalValue = $totalValue + $scoreSum;
        }
        $arFinalScore[$word] = $totalValue;
        $totalValue = 0;
    }
    arsort($arFinalScore);
    return array_search(max($arFinalScore),$arFinalScore);
  }