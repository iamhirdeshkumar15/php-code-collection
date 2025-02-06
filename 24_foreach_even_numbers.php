//Print Even Numbers in an Array using Foreach Loop
<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numbers as $num) {
    if ($num % 2 == 0) {
        echo "$num ";
    }
}
?>
