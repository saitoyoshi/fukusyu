<?php

$N = 6;
$S = 15;
$cards = range(1,$N);

$cnt = 0;
for ($i = 0; $i < (1 << $N); $i++) {
    $sum = 0;
    for ($j = 0; $j < $N; $j++) {
        if ($i & (1 << $j)) {
            $sum += $cards[$j];
        }
    }
    if ($sum === $S) {
        $cnt++;
    }
}

echo $cnt . PHP_EOL;
