<?php

function generateHashtag($str) {
    $str = preg_replace('/\s+/', '', ucwords($str));
    $sizeOf = strlen($str);
    if(($sizeOf == 0) || ($sizeOf > 139)){
        return false;
    }
    return "#".$str;
  }