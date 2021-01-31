<?php

function cat_mouse(string $s): string {
    foreach (str_split($s) as $key => $value) {
        !($value == ".") ?: $count++;
    }
    return ($count > 3) ? "Escaped!" : "Caught!";  
  }