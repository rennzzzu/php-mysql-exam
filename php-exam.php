<?php

function findShort($str){
    $str = explode(' ', $str);
    $response = [];
    foreach( $str as $item ) $response[$item] = strlen($item);
    return array_search(min($response), $response);
  
}
$string1 = "TRUE FRIENDS ARE ME AND YOU";
$string2 = "I AM THE LEGENDARY VILLAIN";

echo '<pre>';
var_dump(findShort($string1));
echo '</pre>';
echo '<pre>';
var_dump(findShort($string2));
echo '</pre>';


function wordSearch($target, $array){
    $response = [];
    foreach( $array as $key => $item ){
        if( $item === $target )  $response[] = 'INDEX '.$key;
    }
    return implode( ' and ', $response );
}

$array = ["I", "TWO", "FORTY", "THREE", "JEN", "TWO", "tWo", "Two"];
$target = "TWO";
echo '<pre>';
var_dump(wordSearch($target, $array));
echo '</pre>';