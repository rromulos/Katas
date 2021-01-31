<?php

function find($integers) {
    foreach($integers as $value){
      if($value % 2 == 0){
        $ctrEven++;
        $elementEven = $value;
      }elseif($value % 2 != 0){
        $ctrOdd++;
        $elementOdd = $value;
      }
    }
    return ($ctrEven < $ctrOdd) ? $elementEven : $elementOdd;
  }