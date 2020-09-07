<?php

function sort_string($text){
     // <Function> :
     // - Recieves formatted user's text from index.php
     // - split's the text into an array of words
     // - split's individual words into array of characters
     // - sorts the letters alphabetically and then "implodes" the array back into words
     // - Last job is to implode the array of sorted words back into a string and return the product

    $string_array = explode(" ", strtolower($text));
    $sorted_array = [];
    foreach($string_array as $words){
        $letter_array = str_split($words, 1);
        sort($letter_array);
        array_push($sorted_array,implode("", $letter_array));
    }
 return implode(" ", $sorted_array);
}
