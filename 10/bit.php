<?php

$cards = [1,2,3,4];
$S = 6;
$cnt = 0;
for($i = 0; $i < (1 << count($cards)); $i++) {
    $sum = 0;
    for ($j = 0; $j < count($cards); $j++) {
        if ($i & (1 << $j)) {
            $sum += $cards[$j];
            // echo $cards[$j];
        }
    }
    if ($sum === $S) {
        $cnt++;
    }
    // echo PHP_EOL;
}
echo $cnt . PHP_EOL;
