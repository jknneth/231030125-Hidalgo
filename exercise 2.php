<?php
echo "Enter a number: ";
$handle = fopen("php://stdin", "r");
$number = fgets($handle);  
$number = trim($number);

if (!is_numeric($number)) {
    echo "Please enter a valia number.\n";
} else {
   
    if ($number % 2 == 0) {
        echo "The number $number is even.\n";
    } else {
        echo "The number $number is odd.\n";
    }

    if ($number > 0) {
        echo "The number $number is positive.\n";
    } elseif ($number < 0) {
        echo "The number $number is negative.\n";
    } else {
        echo "The number is zero.\n";
    }
}
?>

