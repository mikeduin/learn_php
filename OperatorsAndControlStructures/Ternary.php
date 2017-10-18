<?php

$authors = ['Charles Dickens', 'Jane Austin', 'William Shakespeare', 'Mark Twain', 'Louisa May Alcott'];
$count = count($authors);

//if ($count > 0) 
//{
//    echo "There is a total of one author.";
//} 
//else 
//{
//    echo "There are no authors.";
//}

$outcome = ($count > 0) ? "Author total: ".$count : "No Authors.";

echo $outcome;