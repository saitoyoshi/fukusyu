<?php

$a = [1,2,3,4,5];


$b = [
    10=>'red',
    20=>'blue',
    30=>'green',
];
$c = [
    1=>1,
    2=>2,
    3=>3,
    4=>4,
    5=>5,
];
$index = array_search(3,$c);
var_dump($index);
