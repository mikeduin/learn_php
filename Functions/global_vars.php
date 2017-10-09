<?php

// To make a variable contained within a function GLOBAL, include a line declaring the variable as 'global'

$authorName = 'William Shakespeare';

function getAuthor () {
    global $authorName;
    $authorName = 'Charles Dickens';
};

getAuthor();

echo $authorName;

?>
