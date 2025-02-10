// Diamond Star Pattern
<?php
$rows = 5;

// Upper triangle
for ($i = 1; $i <= $rows; $i++) {
    for ($j = $i; $j < $rows; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "* ";
    }
    echo "\n";
}

// Lower triangle
for ($i = $rows - 1; $i >= 1; $i--) {
    for ($j = $rows; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "* ";
    }
    echo "\n";
}
?>
