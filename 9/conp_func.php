<?php

$a = [3,1,4,1,5,9,2,6,5,3,];
usort($a, function($a,$b) {
    if ($a < $b) {
        return -1;
    } elseif ($a > $b) {
        return 1;
    } else {
        return 0;
    }
});
var_dump($a);
