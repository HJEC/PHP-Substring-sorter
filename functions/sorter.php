<?php

function sort_string($text){
    $string_array = explode(" ", strtolower($text));
    $sorted_array = [];
    foreach($string_array as $words){
        $letter_array = str_split($words, 1);
        sort($letter_array);
        foreach($letter_array as $letter){
            if (preg_match("/[^a-zA-Z\d\s]/", $letter)){
                continue;
            }
        }

        array_push($sorted_array,implode("", $letter_array));


    }
 return implode(" ", $sorted_array);
}
