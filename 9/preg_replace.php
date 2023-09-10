<?php

$str = 'a1b2c3';
$r = preg_replace('/[a-z2]/','!', $str);
var_dump($r);
