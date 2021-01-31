<?php

function findShort($str){
    $array_item = explode(" ", $str);
    $array_item = array_map("strlen", $array_item);
    return min($array_item);
}