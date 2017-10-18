<?php

$authors = ['Charles Dickens', 'Jane Austin', 'William Shakespeare', 'Mark Twain', 'Louisa May Alcott'];
$count = count($authors);

// inside of switch parentheses, include an expression or variable that we want to compare to different values

//switch ($count) 
//{
//    case 0:
//        echo "There are no authors".PHP_EOL;
//        break;
//    case 1:
//        echo "There is one author".PHP_EOL;
//        break;
//    // default comes last
//    default: 
//        echo "There is a total of ".$count." authors.".PHP_EOL;
//        break;
//}


switch (5 <==> 7)
{
    case 1: 
        echo "Greater Than";
        break;
    case 0:
        echo "Equal";
        break;
    case -1:
        echo "Less than";
        break;
}

