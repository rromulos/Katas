<?php

function invert(array $a): array {
    $convertedArray = []; 
    foreach ($a as $key => $value) {
      array_push($convertedArray, (($value > 0)) ? -1 * abs($value) : abs($value));
    }
    return $convertedArray;
  }