<?php

/* Use a while loop to print all odd numbers in an array. Use the continue statement to skip loops and avoid printing even numbers.

Remember - you will need to use the \n character sequence at the end of the echo statement to continue to the next line.

Tip: to test whether a number is even, check if the number modulus 2 is equal to zero ($number % 2 == 0). */

$numbers = [56, 65, 26, 86, 66, 34, 78, 74, 67, 18, 34, 73, 45, 67, 75, 10, 60, 80, 74, 16, 86, 34, 12, 23, 42, 72, 36, 3, 73, 9, 92, 81, 94, 54, 97, 74, 45, 55, 70, 94, 96, 81, 86, 86, 84, 4, 32, 8, 96, 86, 87, 18, 84, 87, 59, 48, 32, 90, 17, 22, 82, 79, 66, 28, 17, 14, 80, 83, 66, 36, 21, 89, 68, 2, 51, 65, 20, 87, 48, 5, 1, 16, 60, 53, 84, 90, 16, 2, 37, 73, 57, 70, 57, 69, 68, 1, 24, 40, 72, 97];

// TODO: Print odd numbers only
$index = 0;

while ($index < count($numbers)) {

    $array = $numbers[$index];
    $index++;

    if ($array % 2 == 0 ) { 
        continue;
    } else {
        echo "$array\n";
    }
    
}

?>
