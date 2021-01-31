<?php

function kebabize($string) {
    $string = preg_replace('/[0-9]+/', '', $string);
    return strtolower(preg_replace('/\B([A-Z])/', '-$1', $string));
  }