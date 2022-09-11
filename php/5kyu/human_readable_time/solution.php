<?php

function human_readable($seconds) {
  
    if (($seconds < 0) || ($seconds > 359999)) return null;
    
    if ($seconds === 0) return '00:00:00';
    
    $hours = floor($seconds / 3600);

    $seconds = $seconds - ($hours * 3600);
    
    if ($hours < 10) $hours = '0' . $hours;
        
    $minutes = floor($seconds / 60);

    $seconds = $seconds - ($minutes * 60);
    
    if ($minutes < 10) $minutes = '0' . $minutes;
    
    if ($seconds < 10) $seconds = '0' . $seconds;
    
    return $hours.":".$minutes.":".$seconds;
}