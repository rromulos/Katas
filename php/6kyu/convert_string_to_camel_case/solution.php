<?php

function toCamelCase($str){
    $str = str_replace(['-','_']," ",$str);
    $str = ((ctype_upper($str[0]))) ? ucwords($str) : lcfirst(ucwords($str));   
    return str_replace(" ","",$str);
}