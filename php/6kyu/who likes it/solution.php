<?php

function likes( $names ) {
    $count = count($names);
    if (empty($names)) return "no one likes this"; 
    if ($count === 1) return $names[0] . " likes this";
    if ($count === 2) return $names[0] . " and " . $names[1] . " like this";
    if ($count === 3) return $names[0] . ", " . $names[1] . " and " . $names[2] . " like this";
    if ($count > 3) return $names[0] . ", " . $names[1] . " and ". ($count - 2) . " others like this";
}