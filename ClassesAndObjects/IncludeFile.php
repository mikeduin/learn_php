<?php

// Common naming conventions indicate that you would name the file the same name as the class
// Using include_once is ideal for files that contain classes or functions

include "Person.php";
include_once "Author.php";

include "RandomClass.php";

$newAuthor = new Author('Samuel Langhorne', 'Clemens', 1899);
echo $newAuthor->getCompleteName();