<?php

function gcd($x,$y) {
    while (1) {
        if ($x === 0) return $y;
        if ($y === 0) return $x;
        if ($x > $y) {
            $x = $x % $y;
        } else {
            $y = $y % $x;
        }
    }
}

echo gcd(345,506) . PHP_EOL;
