<?php

// for-each loop is designed specifically for arrays
// the idea is to loop through each item in the array and store it in a temp var 
// so that we can then do something with that temp var

$authors = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare"
);

foreach($authors as $key => $val) {
    echo $val." (".$key.")\n";
}

// $key above is a temp variable just like $val; the => indicates the key/val relationship regardless
// of what the variables are named