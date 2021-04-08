<?php

/* Create a new array which contains the even numbers 2,4,6,8 and 10. The name of the new array should be $even_numbers.
Concatenate the male_names and female_names arrays to create the names array. */


// TODO: add the even_numbers array here
$even_numbers = [2, 4, 6, 8, 10];

$male_names = ["Jake", "Eric", "John"];
$female_names = ["Jessica", "Beth", "Sandra"];

// TODO: join the male and female names to one array
$names = NULL;

$names = array_merge($male_names, $female_names);

print_r($even_numbers);
print_r($names);

?>
