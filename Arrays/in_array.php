<?php

// bool in_array(mixed $needle, array $haystack [, bool $strict = FALSE])
// Third parameter checks to see if the type is the same
// If not found, will print out nothing, which means eval'd as false

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain", 13);

// Changing third param to true checks to see whether type is the same

//echo in_array("13", $authors);
// RETURNS TRUE
echo in_array("13", $authors, true);
// RETURNS FALSE