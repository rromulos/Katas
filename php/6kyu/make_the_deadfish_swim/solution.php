<?php

function parse($data) {
    $array = str_split($data);
    $i = 0;
    $result = [];
    foreach ($array as $value) {
        switch ($value) {
            case "i":
              $i++;
              break;
            case "d":
              $i--;
              break;
            case "s":
              $i *= $i; 
              break;
            case "o":
              array_push($result, $i);
              break;
            }
    }
    return $result;
  }