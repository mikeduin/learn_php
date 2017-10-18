<?php

// WHY DOES THIS RETURN ERROR???

// <=> Spaceship operator returns -1, 0, or 1
// Typically we get an empty string or 1, where 1 is true or empty string is false ... not the case here

echo 1 <=> 2;

// -1 means lefthand is LESS than righthand side
// 0 indicates the values are equal to each other
// 1 means lefthand side is GREATER than righthand side
