<?php

function toJadenCase($string) 
{
   $arWords = explode(" ", $string);
   $arWords = array_map("ucfirst", $arWords);
   return implode(" ",$arWords);
}