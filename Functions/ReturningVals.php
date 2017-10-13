<?php

// To return a value, just use the return keyword.

function authorYear ($authorName, $year = 1910) {
    echo $year;
    echo "\n";
    echo $authorName;
}

function getAuthor() {
    return "Charles Dickens";
};

$authorName = getAuthor();

authorYear($authorName);
