<?php

function decode_morse(string $code): string {
    $morseTable = array(
    "A"   => ".-",
    "B"   => "-...", 
    "C"   => "-.-.", 
    "D"   => "-..", 
    "E"   => ".", 
    "F"   => "..-.", 
    "G"   => "--.", 
    "H"   => "....",  
    "I"   => "..", 
    "J"   => ".---", 
    "K"   => "-.-", 
    "L"   => ".-..", 
    "M"   => "--", 
    "N"   => "-.", 
    "O"   => "---", 
    "P"   => ".--.", 
    "Q"   => "--.-", 
    "R"   => ".-.", 
    "S"   => "...", 
    "T"   => "-", 
    "U"   => "..-", 
    "V"   => "...-", 
    "W"   => ".--", 
    "X"   => "-..-", 
    "Y"   => "-.--", 
    "Z"   => "--..", 
    "0"   => "-----",
    "1"   => ".----", 
    "2"   => "..---", 
    "3"   => "...--", 
    "4"   => "....-", 
    "5"   => ".....", 
    "6"   => "-....", 
    "7"   => "--...", 
    "8"   => "---..", 
    "9"   => "----.",
    "."   => ".-.-.-",
    ","   => "--..--",
    "?"   => "..--..",
    "/"   => "-..-.",
    " "   => " ",
    "SOS" => "...---...",
    "!"   => "-.-.--"
);

$morseWords = explode("   ",$code);
foreach($morseWords as $singleWord){
    $arLetters = explode(" ", $singleWord);
    foreach($arLetters as $letter){
        $decodedMessage .= array_search($letter, $morseTable);
    }
    $decodedMessage .= " ";
}
return ltrim(rtrim($decodedMessage));
}