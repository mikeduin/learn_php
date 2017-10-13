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
