<?php
function factorial($num) {
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}
echo "Factorial of 5 is " . factorial(5);
?>
