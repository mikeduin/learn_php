<?php

// Use an equal sign to indicate default parameter values
// Function can then be called without a second parameter without throwing an error
// Default parameters must be at the end of a function declaration

function defaultParams($tempAuthor, $tempYear = 1910) {
    echo $tempAuthor;
    echo "\n";
    echo $tempYear;
}

defaultParams('Shakespeare');


