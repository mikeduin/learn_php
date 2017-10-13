<?php 

define('CHECK_CONSTANT', 'Yes I am a constant!');

$intVar = 1234;
$stringVar = "I'm a string";
$boolVar = false;
$floatVar = 12.34;

// These functions will return a 0 or 1 depending on whether the variable is the noted type

//echo is_int($intVar);
//echo is_string($stringVar);
//echo is_bool($boolVar);
//echo is_float($floatVar);

echo defined('CHECK_CONSTANT');