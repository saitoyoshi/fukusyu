<?php

$values = ['a','b','c'];
for ($i = 0; $i < count($values); $i++) {
    for ($j = $i+1; $j < count($values); $j++) {
        echo $values[$i] . '-' . $values[$j] . PHP_EOL;
    }
}
