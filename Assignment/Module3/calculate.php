<?php

$physics = 80;
$chemistry = 75;
$biology = 85;
$mathematics = 90;
$computer = 95;

$total_marks = $physics + $chemistry + $biology + $mathematics + $computer;
$percentage = ($total_marks / 500) * 100;

echo "Percentage: " . $percentage . "%";

if ($percentage >= 90) {
    echo "Grade: A";
} elseif ($percentage >= 80) {
    echo "Grade: B";
} elseif ($percentage >= 70) {
    echo "Grade: C";
} elseif ($percentage >= 60) {
    echo "Grade: D";
} else {
    echo "Grade: F";
}

?>