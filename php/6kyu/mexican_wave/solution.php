<?php

function wave($people){
    $nPeople = $people;
    $arMexicanWave = [];
    for ($i=0; $i < strlen($people); $i++) { 
        if(substr($people,$i,1) != ' '){
            $nPeople[$i]= strtoupper($nPeople[$i]);
            array_push($arMexicanWave, $nPeople);
            $nPeople = $people;
        }
    }
    return $arMexicanWave;
  }