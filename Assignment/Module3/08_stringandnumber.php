<?php

$a = '1';
$b = &$a;
$b = "2$b";

echo "Value of b is $b  "; // Output: Value of $a: 21

?>
