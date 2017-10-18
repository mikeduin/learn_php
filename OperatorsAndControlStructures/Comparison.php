<?php

// REMEMBER: var_dump dumps out information about a variable

var_dump(8 == 8).PHP_EOL;
// This compares the two integers and asks 'is 8 equal to 8'?
// Prints out bool(true)

var_dump(8 === "8").PHP_EOL;
// Just like JS, === compares both value AND type
// Prints out bool(false) as string value 8 is not identical to integer value 8

var_dump(7 <> 6).PHP_EOL;
// EQUIVALENT NOT EQUAL OPERATOR: var_dump(7 != 6)
// <> is 'not equal', so: 'Does 7 not equal 6'?
// Prints out bool(true), since 7 does not equal 6

var_dump(7 !== '7').PHP_EOL;
// Checks for 'Not Identical
// Prints out bool(true)