<?php


$a = [1,2,3,4,];
for ($i = 0; $i < (1<< count($a)); $i++) {
    for ($j = 0; $j < count($a); $j++) {
        if ($i & (1<<$j)) {
            echo $a[$j];
        }
    }
    echo PHP_EOL;
}
