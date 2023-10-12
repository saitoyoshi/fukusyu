<?php

$s = "abcdef";
for ($i = 0; $i < strlen($s); $i++) {
    echo $s . PHP_EOL;
    $s = substr($s,1) . $s[0];
}
