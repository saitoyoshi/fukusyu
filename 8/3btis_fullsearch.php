<?php

$set = range('a', 'c');

for ($i = 0; $i < (1 << 3); $i++) {
    for ($j = 0; $j < 3; $j++) {
        if ($i & (1 << $j)) {
            echo $set[$j];
        }
    }
    echo PHP_EOL;
}
