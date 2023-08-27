<?php

$values = [0,1,2];
for ($i = 0; $i < count($values); $i++) {
    for ($j = $i+1; $j < count($values); $j++) {
        echo $i . '-' . $j . PHP_EOL;
    }
}
