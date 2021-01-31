<?php

function persistence(int $num) : int {
    $count = 0;
    while ($num > 9) {
        $arValues = str_split($num);
        $result = array_product($arValues);
        $num = $result;
        $count++;
    }
  return $count;
}