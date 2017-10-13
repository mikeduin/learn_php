<?php

// bool array_key_exists(mixed $key, array $array)
// If NOTHING is returned using array_key_exists, the $key is not found
// If the key IS found, it will return a 1 (true)

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain");

$authorsAssoc = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare",
    "Mark Twain", 
    4 => "Hello",
    "Whatever"
);

//echo $authors[1];
//echo $authorsAssoc['brilliant'];
echo array_key_exists(6, $authorsAssoc);
