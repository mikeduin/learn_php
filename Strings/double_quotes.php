<?php

// Double-quoted strings are valuated for variables etc

$currency = 'penny';

$sampleString = "A $currency saved is a $currency earned";

//echo $sampleString;

// To evaluate variables concatenated with text within a string, surround the variable with {}
// Another option is using a period (outside of the string) to concatenate the variable with text

$var = 2;

//echo "{$var}nd place";
echo $var.".nd place";

?>
