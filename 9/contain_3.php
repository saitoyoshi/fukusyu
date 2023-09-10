<?php

$str = '13';
// var_dump(strpos($str,'3'));
$point = 100;
if (strpos($str,'3') !== false){
    $point *= 1.03;
}
echo $point . PHP_EOL;
