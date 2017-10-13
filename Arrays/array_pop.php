<?php

// mixed array_pop(array &$string)
// removes item from array and can use to store in variable

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain");

$removed = array_pop($authors);

echo $removed;
echo "\n";
print_r($authors);