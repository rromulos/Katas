<?php

function sum_strings($a, $b) {
    $num1 = strrev($a);
    $num2 = strrev($b);
  
    $lengthNum1 = strlen($num1);
    $lengthNum2 = strlen($num2);
    $maxLength = max($lengthNum1, $lengthNum2);
    $carry = 0;
    $result = '';
  
    for ($i = 0; $i < $maxLength; $i++) {
        $digitNum1 = ($i < $lengthNum1) ? intval($num1[$i]) : 0;
        $digitNum2 = ($i < $lengthNum2) ? intval($num2[$i]) : 0;
        $sum = $digitNum1 + $digitNum2 + $carry;
        $carry = intdiv($sum, 10);
        $result .= strval($sum % 10);
    }
  
    if ($carry > 0) {
        $result .= strval($carry);
    }
  
    $result = strrev($result);
    $result = ltrim($result, '0');
  
    if ($result === '') {
        $result = '0';
    }
  
    return $result;
  }