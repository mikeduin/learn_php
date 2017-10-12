<?php

// string substr(string $string, int $start [, int $length])

$quote = "Only those who will risk going too far can possibly find out how far one can go.";

echo substr($quote, 4);

// Using a negative number as the start character alters to start four characters in from the END of the string

echo "\n";

echo substr($quote, -4);

echo "\n";

echo substr($quote, 4, -5);