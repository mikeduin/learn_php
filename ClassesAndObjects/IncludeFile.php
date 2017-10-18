<?php

// Common naming conventions indicate that you would name the file the same name as the class
// Using include_once is ideal for files that contain classes or functions
// Use 'require' if you do NOT want code to run if file is not found (code will run w/include even if not found)


include "Person.php";
include_once "Author.php";

include "RandomClass.php";

$newAuthor = new Author('Samuel Langhorne', 'Clemens', 1899);
echo $newAuthor->getCompleteName();