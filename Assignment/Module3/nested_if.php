<?php

for ($year = 1901; $year <= 2016; $year++) {
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                echo "$year is a leap year.<br>";
            }
        } else {
            echo "$year is a leap year.<br>";
        }
    }
}

?>
