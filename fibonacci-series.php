<?php
function printFibonacci($n) {
    $num1 = 0;
    $num2 = 1;

    for ($i = 0; $i < $n; $i++) {
        echo $num1 . " ";

        // Calculate the next Fibonacci number
        $num3 = $num1 + $num2;

        // Update the numbers for the next iteration
        $num1 = $num2;
        $num2 = $num3;
    }
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);