# Program to check if a string or number is a palindrome.

<?php
function isPalindrome($string) {
    if ($string == strrev($string)) {
        return true;
    }
    return false;
}
$string = "madam"; // "121" 
if (isPalindrome($string)) {
    echo "$string is a palindrome.";
} else {
    echo "$string is not a palindrome.";
}
?>
