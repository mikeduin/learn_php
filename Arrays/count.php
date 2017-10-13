<?php

// int count(mixed $array_or_countable [, int $mode = COUNT_NORMAL])
// second parameter will help to count every element in multidimensional array
// can use either 1 or COUNT_RECURSIVE as second parameter to count every unique instane

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain");

$authorsMulti = [
    "Male" => [
        "Charles Dickens" => ["A Christmas Carol", "Oliver Twist"],
        "William Shakespeare" => ["Romeo & Juliet", "Richard III"],
        "Mark Twain" => ["Tom Sawyer", "Huck Finn"]
    ],
    "Female" => [
        "L.M. Montgomery" => ["Anne of Green Gables", "Anne of Avonlea"],
        "Louisa May Alcott" => ["Little Women"]
    ]
];

echo count($authorsMulti, 1);