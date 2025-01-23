<?php
function isPalindrome($string) {
    if ($string == strrev($string)) {
        return true;
    }
    return false;
}
$string = "madam";
if (isPalindrome($string)) {
    echo "$string is a palindrome.";
} else {
    echo "$string is not a palindrome.";
}
?>
