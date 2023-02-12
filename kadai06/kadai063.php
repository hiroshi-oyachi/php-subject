<?php

function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($max_number < $a) {
            $max_number = $a;
        }
    }
    echo $max_number;
}

max_array(array(-1, -3, 10, 50, 9));
echo "\n";