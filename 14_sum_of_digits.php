<?php
$num = 1234;
$sum = 0;
$temp = $num;

while ($temp > 0) {
    $sum += $temp % 10;
    $temp = (int)($temp / 10);
}

echo "The Sum of digits of $num is: $sum";
?>