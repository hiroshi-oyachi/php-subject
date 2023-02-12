<?php

$text = '<p>Test paragraph.</P><!-- Comment --><a href="#fragment">Othre text</a>';
echo strip_tags($text);
echo "\n";

echo strip_tags($text, '<p><a>');

$menbers = array("一郎", "次郎", "三郎");
array_push($members, "四郎", "五郎");
print_r($members);

$array1 = array();
$array2 = array(1 => "data");
$resuit = array_merge($array1, $array2);

