<?php

// string position will find a particular character or set of characters within a string
// mixed strpos(string $haystack, mixed $needle, [, int $offset = 0])

$quote = "Courage is resistance to fear, mastery of fear, not absence of fear.";

echo strpos($quote, "fear");

echo "\n";

// This prints 25, indicating the word 'fear' starts at position 25.

// To find a second appearance, use the optional third $offset parameter.

echo strpos($quote, "fear", 26);

// This would look for the next occurence of fear starting at position 26
// This prints 42, the position of the second time 'fear' appears

echo "\n";

// To find single characters ...

echo strpos($quote, "c");

// This prints 19 because string position is CASE-SENSITIVE.

echo "\n";

echo strpos($quote, "z");

// The string position returned for a character or word NOT found in a string is an empty string.