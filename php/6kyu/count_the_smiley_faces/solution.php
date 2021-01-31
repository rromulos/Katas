<?php

function isValidNoose(string $str){
    $validNoose = ['-', '~'];
    $result = array_search($str, $validNoose);
    return (is_int($result)) ? true : false;
}

function isValidMouth(string $str){
    $validMouth = ['D', ')'];
    $result = array_search($str, $validMouth);
    return (is_int($result)) ? true : false;
}

function isValidEyePar(string $str){
    $validMouth = [':', ';'];
    $result = array_search($str, $validMouth);
    return (is_int($result)) ? true : false;
}

function count_smileys($arr): int {
    $cnt = 0;
    if(count($arr) == 0){
        return $cnt;
    }
    $validArray = [':)', ':D', ";-D", ':~'];
    $invalidArray = [';(', ':>', ':}', ':]'];
    foreach($arr as $item){
        $result = array_search($item, $validArray);
        if(is_int($result)){
            $cnt++;
        }else{
            $resultInvalid = array_search($item, $invalidArray);       
            if(!is_int(array_search($item, $invalidArray))){
                $strSize = strlen($item);
                if($strSize == 2){
                    $eye = substr($item, 0,1);
                    $mouth = substr($item,1,1);
                    if((isValidEyePar($eye)) && (isValidMouth($mouth))){
                        $cnt++;
                    }
                }elseif ($strSize == 3){
                    $eye = substr($item, 0,1);
                    $noose = substr($item,1,1);
                    $mouth = substr($item,2,1);
                    if((isValidEyePar($eye)) && (isValidNoose($noose)) &&(isValidMouth($mouth))){
                        $cnt++;
                    }
                }
            }     
        }
    }
    return $cnt;
}