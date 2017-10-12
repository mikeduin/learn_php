<?php

//str_split takes a string and converts it to an array

//string str_split(string $string [, int $split_length = 1])

// Any integer provided as the second parameter will split the string into arrays of that size

$quote = "It is a melancholy truth that even great men have their poor relations.";

$varArray = str_split($quote, 5);

// To print the contents of an array, use print_r();

print_r($varArray);