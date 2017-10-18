<?php

$var1 = (6 < 7);
$var2 = (8 == 8);
$var2 = false;

var_dump($var1);
var_dump($var2);

var_dump($var1 and $var2);
var_dump($var1 && $var2);
// 'and' or && returns true if both compared expressions are true

var_dump($var1 or $var2);
var_dump($var1 || $var2);
// 'or' is equivalent to ||

var_dump(!$var1);
// ! is 'not' logical operator just like in JS