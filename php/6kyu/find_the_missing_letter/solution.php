<?php

function find_missing_letter(array $array): string {
    $collection = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $idx = strpos($collection, $array[0]);
  
    for ($i = 0; $i < sizeof($array); $i++, $idx++) {
        if ($collection[$idx] !== $array[$i]) {
            return $collection[$idx];
        }
    }  
}