<?php

// The big thing to remember with single-quoted strings is that the inclusive text will be evaluated
// AS-IS. No variable names or escape sequences (such as \n) will be evaluated.

// Strings with single-quotes will not replace the variable name within a string with the variable value
// as a double-quoted string would

$currency = 'penny';

$sampleString = 'A $currency saved is a $currency earned';

//echo $sampleString;

// If a single-quoted string includes an apostrophe, put a backslash before the apostrophe to correctly
// display the string and prevent an error from being thrown

$misc = 'St Patrick\'s Day';

echo $misc;


?>
