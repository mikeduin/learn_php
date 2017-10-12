<?php

// String replace will replace one value with another value inside of a string

// mixed str_replace(mixed $search, mixed $replace, mixed $subject [, int &$count])
// $search = what you're looking for
// $replace = what you're replacing with
// $subject = the string you're searching in
// 4th parameter must be a variable name and is the count of how many times $search is replaced

$quote = "To be or not to be? That is the question.";

$replaced = str_replace("be", "know", $quote, $count);

echo $replaced;
echo "\n";
echo $count;

// str_replace can also be used with arrays (will cover later)