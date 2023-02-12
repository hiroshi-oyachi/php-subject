<?php
$arr = array(1,3,5,7,9);


function kakezan($arr) {
    $result = 1;
    foreach($arr as $a) {
        $result *= $a;
    }
    return $result;
}

echo kakezan($arr);