<?php

/* Complete the code below to sum all the numbers in all inner arrays and print the result in a new line. */


$matrix = [ 
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

foreach ($matrix as $numbers) {
    $sum = 0;

    // TODO: Write you'r code here.
    
    foreach ($numbers as $num_line) {
        $sum += $num_line;
    }
    
    echo "{$sum}\n";
}

?>
