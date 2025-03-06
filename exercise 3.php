<?php
echo "FizzBuzz Loop (1 to 100):\n";
for ($i = 1; $i <= 100; $i++) {
if ($i % 3 == 0 && $i % 5 == 0) {
echo "FizzBuzz\n";
} elseif ($i % 3 == 0) {
echo "Fizz\n";
} elseif ($i % 5 == 0) {
echo "Buzz\n";
} else {
echo $i . "\n";
}
}

echo "\n";

echo "Even Fibonacci Sequence (First 10 numbers):\n";
$fib1 = 0;
$fib2 = 1;
$count = 0;

while ($count < 10) {
$fib3 = $fib1 + $fib2;
if ($fib3 % 2 == 0) {
echo $fib3 . "\n";
}
$fib1 = $fib2;
$fib2 = $fib3;
$count++;
}
?>