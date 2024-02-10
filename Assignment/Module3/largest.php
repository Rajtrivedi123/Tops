<?php

$a = 10;
$b = 20;
$c = 15;

$largest = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);

echo "The largest number is: " . $largest;

?>
