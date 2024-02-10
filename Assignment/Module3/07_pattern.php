<!-- Write a program to print the below format :
  5 9
2 6 10
3 7 11
4 8 12 -->
<?php
$rows = 4;
$cols = 3;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        echo $i + $j * $rows . " ";
    }
    echo "<br>";
}
?>

<!-- Write a program for this Pattern:
*****
*
*
*
*****-->
<?php
    $size = 5;
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            if ($i == 0 || $i == $size - 1 || $j == 0) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "<br>";
    }

?>
