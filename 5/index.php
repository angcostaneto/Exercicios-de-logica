<?php

$array1 = ['a','z','c'];
$array2 = [1, 2, 3];

$array3 = array_merge($array2, $array1);

echo '<pre>';
var_dump($array3);
echo '</pre>';