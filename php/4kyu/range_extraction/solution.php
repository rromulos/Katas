
<?php

function solution(array $inputList): string
{
    $formattedRanges = [];
    $currentRangeStart = $inputList[0];
    $currentRangeEnd = $inputList[0];
    
    for ($i = 1; $i < count($inputList); $i++) {
        if ($inputList[$i] == $currentRangeEnd + 1) {
            $currentRangeEnd = $inputList[$i];
        } else {
            if ($currentRangeEnd - $currentRangeStart >= 2) {
                $formattedRanges[] = ($currentRangeStart == $currentRangeEnd - 1) ? "$currentRangeStart,$currentRangeEnd" : "$currentRangeStart-$currentRangeEnd";
            } else {
                $formattedRanges[] = "$currentRangeStart";
                if ($currentRangeEnd !== $currentRangeStart) {
                    $formattedRanges[] = "$currentRangeEnd";
                }
            }
            
            $currentRangeStart = $currentRangeEnd = $inputList[$i];
        }
    }
    
    if ($currentRangeEnd - $currentRangeStart >= 2) {
        $formattedRanges[] = "$currentRangeStart-$currentRangeEnd";
    } else {
        $formattedRanges[] = "$currentRangeStart";
        if ($currentRangeEnd !== $currentRangeStart) {
            $formattedRanges[] = "$currentRangeEnd";
        }
    }
    
    return implode(',', $formattedRanges);
}