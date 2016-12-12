<?php

function find_word($dir,$word){
    $arr = scandir($dir);
 foreach ($arr as $key => $value) {
    if (($value === '.') or ($value === '..')) {
        unset($arr[$key]);
    }
}
foreach ($arr as $key => $value) {
    if (is_int(strpos($arr[$key], $word))) {
        print_r($arr[$key] . '<br>');
    }

 }
}

echo find_word($dir2,$word2);
