<?php
$num1 = 0;
$num2 = 1;
$count = 10;
echo "$num1 $num2 ";
for ($i = 2; $i < $count; $i++) {
    $num3 = $num1 + $num2;
    echo "$num3 ";
    $num1 = $num2;
    $num2 = $num3;
}
?>
