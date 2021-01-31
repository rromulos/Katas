<?php

function problem($x){
    return ((is_string($x))) ? "Error" : ($x * 50) + 6;
  }