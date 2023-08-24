<?php

function number($bus_stops) {
    $remainingPassengers = 0;

    foreach ($bus_stops as $stop) {
        $remainingPassengers += $stop[0];
        $remainingPassengers -= $stop[1];
    }

    return max(0, $remainingPassengers);
}