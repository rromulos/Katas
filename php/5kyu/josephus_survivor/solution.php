<?php

function josephus_survivor(int $n, int $k): int {
  $r = [];
  $x = -1;
  
  for ($i = 1; $i <= $n; $i++) array_push($r, $i);

  while (sizeof($r) > 1) {
	  $x = ($x + $k) % sizeof($r);
  	unset($r[$x]);
  	$x -= 1;
  	$r = array_values($r);
  }
  
  return $r[0];
}