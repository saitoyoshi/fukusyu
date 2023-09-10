<?php

$a = range(0, 9);
// $b = array_chunk($a, 3);
// array_splice($a,3,4,'abc');
$b = array_slice($a,3,3);
var_dump($b);
