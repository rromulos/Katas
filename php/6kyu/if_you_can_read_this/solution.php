<?php

function to_nato($words){
    $nato = array("a"=>"Alfa", "b"=>"Bravo", "c"=>"Charlie", "d"=>"Delta", "e"=>"Echo", "f"=>"Foxtrot", "g"=>"Golf", "h"=>"Hotel", "i"=>"India",
      "j"=>"Juliet", "k"=>"Kilo", "l"=>"Lima",  "m"=>"Mike", "n"=>"November", "o"=>"Oscar", "p"=>"Papa", "q"=>"Quebec", "r"=>"Romeo", 
      "s"=>"Sierra", "t"=>"Tango", "u"=>"Uniform", "v"=>"Victor", "w"=>"Whiskey", "x"=>"Xray",  "y"=>"Yankee", "z"=>"Zulu", "0"=>"Zero", 
      "1"=>"One", "2"=>"Two", "3"=>"Three",  "4"=>"Four", "5"=>"Five", "6"=>"Six", "7"=>"Seven", "8"=>"Eight", "9"=>"Nine",
      "-"=>"Dash", " "=>"(Space)", "!"=>"!", "."=>".", "?"=>"?");
  foreach(explode(" ", $words) as $word){
      foreach(str_split($word) as $sLetter){
          $word = $nato[strtolower(substr($sLetter,0,1))];
          $sentenceDecoded .= $word." ";
      }
  }
  return rtrim($sentenceDecoded);
}