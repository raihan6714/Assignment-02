<?php
$num1 = 0;
$num2 = 1;

for ($count = 0; $count < 10; $count++) {
$fibonacci = $num1;
echo $fibonacci . " ";

// Calculate the next Fibonacci number
$num3 = $num1 + $num2;

// Check if the Fibonacci number exceeds 100
if ($fibonacci > 100) {
break; // Exit the loop if the condition is met
}

// Update the numbers for the next iteration
$num1 = $num2;
$num2 = $num3;
}