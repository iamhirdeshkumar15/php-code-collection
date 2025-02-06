// Reverse a Number using Do-While Loop
<?php
$number = 12345;
$reverse = 0;

do {
    $digit = $number % 10;
    $reverse = $reverse * 10 + $digit;
    $number = (int)($number / 10);
} while ($number > 0);

echo "Reversed number: $reverse";
?>
