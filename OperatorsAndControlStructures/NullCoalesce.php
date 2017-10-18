<?php

$authors = ['Charles Dickens', 'Jane Austin', 'William Shakespeare', 'Mark Twain', 'Louisa May Alcott'];
//$count = count($authors);

// This checks to see if $count variable has been set. If yes, it returns that variable
// A variable in PHP that has not been set is in empty string and returns nothing
// This operator is great for testing variables that have not been set, which makes it an ideal operator
// to use when dealing with data from a web page form.
// You can also chain together a la "if first value is set, return that value; if not and second value
// is set, return second value; if neither found, return "Count unavailable"
$outcome = $count ?? $authors ?? "Count unavailable.";
echo $outcome;

