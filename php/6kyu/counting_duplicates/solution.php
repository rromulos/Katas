<?php

function duplicateCount($text) {
    $countingArr = array_count_values(str_split(strtoupper($text)));
    return count(array_diff($countingArr, array('1')));
}