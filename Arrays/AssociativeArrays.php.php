<?php

// Anytime you alter the key in an array, you have turned an indexed array into an associative array

$authors = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare",
    "Mark Twain", 
    4 => "Hello",
    "Whatever"
);

print_r($authors);
