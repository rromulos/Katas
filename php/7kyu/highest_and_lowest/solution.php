<?php

function highAndLow($numbers)
{
  $arNumbers = explode(" ",$numbers);
  return max($arNumbers).' '.min($arNumbers);
}