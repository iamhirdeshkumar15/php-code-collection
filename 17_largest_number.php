<?php
$a = 10;
$b = 25;
$c = 15;

if ($a > $b && $a > $c) {
    echo "The largest number is $a";
} elseif ($b > $a && $b > $c) {
    echo "The largest number is $b";
} else {
    echo "The largest number is $c";
}
?>
