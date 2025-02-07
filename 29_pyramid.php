// Pyramid Star Pattern

<?php
$rows = 5;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = $i; $j < $rows; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "* ";
    }
    echo "\n";
}
?>
