<?php

// void unset(mixed $var)
// think of unset as "remove" or "delete" or as if the variable had never been created
// unset can be used for ANY VARIABLE TYPE, including an entire array. if you unset($array) with no
// key noted, it will delete the entire array

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain");

$authorsAssoc = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare"
);
//
//unset($authors[1], $authors[0]);

//print_r($authors);

unset($authorsAssoc['poetic']);

print_r($authorsAssoc);