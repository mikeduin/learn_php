<?php

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

print_r($authorsMulti['Male']['Mark Twain'][1]);

// An important takeaway here is that you could NOT get this same result by using 
// $authorsMulti['Male'][2][1], because "Mark Twain" is not actually indexed as the second
// element in the array since its associative. In an associative array, you MUST refer to the key
// by its actual key