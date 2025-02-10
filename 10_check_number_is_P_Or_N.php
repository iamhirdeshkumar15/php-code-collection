<?php
$num = -5;

if ($num > 0){
    echo "$num is positive.";
} elseif ($num < 0) {
    echo "$num is negative.";
} else {
    echo "$num is zero.";
}
?>


// another 
<?php
function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}
echo isPrime(7) ? "Prime" : "Not Prime";
?>
