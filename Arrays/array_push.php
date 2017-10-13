<?php

// Two methods to add values to array
// int array_push(array &$array, mixed $value1 [, mixed $value2, etc])
// array_push returns an integer with the count of how many items are now in the array

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain");

array_push($authors, "Louisa May Alcott");

//$authors[] = "L.M. Montgomery";
$authors['nice'] = "L.M Montgomery";

// SQUARE BRACKETS ARE PREFERRED METHOD, BECAUSE ...
// If array has not been declared, array is created with [] method. With array_push, error is thrown.

// array_push will also only add indexed values; so if adding to an associative array, key would be next available integer
// Can declare key INSIDE the empty-square value method to add key/value pair to associative array

print_r($authors);

