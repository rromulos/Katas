<?php

function findIt(array $seq) : int
{
    $arrControl = [];
    foreach ($seq as $value) {
      (isset($arrControl[$value])) ? $arrControl[$value]++ : $arrControl[$value] = 1;
    }
  
    foreach ($arrControl as $key => $value) {
        if (($value % 2) === 1) return $key;
    }
  
    return null;
}