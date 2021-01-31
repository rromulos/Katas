<?php

function countBits($n) 
{
   $arrayBits = str_split(str_replace("0","",decbin($n)));
   return array_sum($arrayBits);
}