<?php
function vowelCount($str){
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    for($i = 0; $i < strlen($str); $i++){
        if(in_array(strtolower($str[$i]), $vowels));
        $count++;
    }
    return $count;
}

$strings = ["Hello", "World", "PHP", "Programming"];
foreach($strings as $string){
    $vowelCount = vowelCount($string);
    $stringReverse = strrev($string);
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $stringReverse \n";
}