<?php

echo gcdi(506,345) . PHP_EOL;
function gcd($x,$y) {
    if ($y === 0) return $x;
    return gcd($y, $x % $y);
}
function gcdi($x, $y) {
    while (1) {
        if ($x === 0) return $y;
        if ($y === 0) return $x;
        if ($x > $y) $x = $x % $y;
        else $y = $y % $x;
    }
}
