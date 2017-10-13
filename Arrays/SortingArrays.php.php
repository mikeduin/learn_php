<?php

// Many ways to sort an array
// METHOD 1: bool sort(array &$array [, int $sort_flags = SORT_REGULAR])
// $sort_flags can be used to alter the default sorting behavior
// METHOD 2: bool asort(array &$array [, int $sort_flags = SORT_REGULAR])
// asort preserves the key:value relationships ... perfect for associative arrays so they aren't indexed
// METHOD 3: bool ksort(array &$array [, int $sort_flags = SORT_REGULAR])
// ksort will sort alphabetically by KEY


$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain");

$authorsAssoc = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare"
);

// If you use the regular sort function on an associative array, it will sort the values alphabetically
// and then convert the keys to indexed values

//sort($authorsAssoc);
// sort($array) will sort values in alphabetical order
 
//print_r($authorsAssoc);

asort($authors);

print_r($authors);

// Note that the keys are preserved as the original indexed values!
